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
        // Crée une nouvelle instance de User
        $user = new User();

        // Crée une nouvelle instance de Patient
        $patient = new Patient();

        // Crée le formulaire
        $form = $this->createForm(UserPatientFormType::class);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les données du formulaire User
            $userData = $form->get('userForm')->getData();

            // Vérifier si l'email existe déjà
            $email = $userData->getEmail();
            $existingUser = $emi->getRepository(User::class)->findOneBy(['email' => $email]);
            
            if ($existingUser) {
                // L'email existe déjà
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->redirectToRoute('app_user');
            }

            // Mettre à jour l'email de l'utilisateur
            $user->setEmail($email);

            // Hacher le mot de passe
            $password = $userData->getPassword();
            $passwordHache = $passwordHasher->hashPassword($user, $password);
            $user->setPassword($passwordHache);

            // Enregistrer le User en base de données
            $emi->persist($user);
            $emi->flush();

            // Récupérer les données du formulaire Patient
            $patientData = $form->get('patientForm')->getData();
            $patient->setPrenom($patientData->getPrenom());
            $patient->setNom($patientData->getNom());
            $patient->setAdressePostale($patientData->getAdressePostale());

            // Associer le User au Patient
            $patient->setUser($user);
            $user->setRoles(['ROLE_USER']); // Attribuer le rôle ROLE_USER

            // Enregistrer le Patient en base de données
            $emi->persist($patient);
            $emi->flush();

            // Rediriger vers la page d'accueil
            $this->addFlash('success', 'Inscription réussie !');
            return $this->redirectToRoute('app_home');
        }

        // Afficher le formulaire dans le template
        return $this->render('userpatient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}