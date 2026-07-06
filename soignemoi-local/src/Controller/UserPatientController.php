<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Patient;
use App\Form\UserPatientFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserPatientController extends AbstractController
{
    #[Route('/formulaire/userpatient', name: 'app_user')]
    public function register(
        Request $request,
        EntityManagerInterface $emi,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Créer une nouvelle instance de User
        $user = new User();

        // Créer une nouvelle instance de Patient
        $patient = new Patient();

        // Créer le formulaire composite User + Patient
        $form = $this->createForm(UserPatientFormType::class);

        // Associer les données envoyées par le formulaire à l'objet formulaire
        $form->handleRequest($request);

        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Récupérer les données du sous-formulaire User
            $userData = $form->get('userForm')->getData();

            // Récupérer l'email saisi
            $email = $userData->getEmail();

            // Vérifier si l'email existe déjà en base de données
            $existingUser = $emi->getRepository(User::class)->findOneBy([
                'email' => $email
            ]);

            if ($existingUser) {
                // Si l'email existe déjà, on affiche un message d'erreur
                $this->addFlash('error', 'Cet email est déjà utilisé.');

                // Puis on revient au formulaire
                return $this->redirectToRoute('app_user');
            }

            // Enregistrer les informations communes à tous les utilisateurs
            $user->setPrenom($userData->getPrenom());
            $user->setNom($userData->getNom());
            $user->setEmail($email);

            // Attribuer le rôle par défaut : ici un patient
            $user->setRoles(['ROLE_USER']);

            // Hacher le mot de passe avant de l'enregistrer
            $password = $userData->getPassword();
            $passwordHache = $passwordHasher->hashPassword($user, $password);
            $user->setPassword($passwordHache);

            // Récupérer les données du sous-formulaire Patient
            $patientData = $form->get('patientForm')->getData();

            // Enregistrer uniquement les informations propres au patient
            $patient->setAdressePostale($patientData->getAdressePostale());

            // Associer le patient au compte utilisateur
            $patient->setUser($user);

            // Préparer les deux entités pour l'enregistrement
            $emi->persist($user);
            $emi->persist($patient);

            // Enregistrer réellement en base de données
            $emi->flush();

            // Afficher un message de réussite
            $this->addFlash('success', 'Inscription réussie !');

            // Rediriger vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // Afficher le formulaire d'inscription
        return $this->render('userpatient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}