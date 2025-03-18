<?php

// src/Controller/UserController.php

namespace App\Controller;

use App\Entity\Patient; // Ensure the Patient entity exists in the specified namespace
use App\Form\UserPatientType; // Ensure this matches the actual class name and namespace
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
// Removed incorrect import for UserPatienType

class UserPatientController extends AbstractController
{
    #[Route('soignemoi-local/formulaire/userpatient', name: 'app_User')]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $emi): Response
    {
        // Crée une nouvelle instance de user
        $user = new User();

        // Crée une nouvelle instance de Patient
        $patient = new Patient(); // Correct instantiation syntax

        // Crée le formulaire
        $form = $this->createForm(UserPatientType::class);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // récupérer données du formulaire user
            $userData = $form->get('userForm')->getData();
            // récupérer dans la classe $user l'email
            $email = $userData->getEmail(); // Nouvel email
            $existingUser = $emi->getRepository(User::class)->findOneBy(['email' => $email]);

            if ($existingUser && $existingUser->getId() !== $user->getId()) {
                // L'email existe déjà pour un autre utilisateur
                throw new \Exception('Cet email est déjà utilisé.');
            }
            // Mettre à jour l'email de l'utilisateur
            $user->setEmail($email);
            // Récupère le mot de passe en clair du formulaire
            $password = $userData->getPassword();
            $passwordHache = $passwordHasher->hashPassword($user, $password);
            $user->setPassword($passwordHache);
            
            // Enregistre le User en base de données
            $emi->persist($user);
            $emi->flush();
            
            // récupérer les champs de Patient
            $patientData = $form->get('patientForm')->getData();
            $prenom = $patientData->getPrenom();
            $nom = $patientData->getNom();
            $adressePostale =$patientData->getAdressePostale();

            // Associer le User au Patient (problème user_id)
            $patient->setUser($user);
            $patient->setPrenom($prenom);
            $patient->setNom($nom);
            $patient->setAdressePostale($adressePostale);
            $user->setRoles(['ROLE_USER']); // Attribuer le rôle ROLE_USER


            $emi->persist($patient);
            $emi->flush();


            // Redirige vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // Affiche le formulaire dans le template
        return $this->render('userpatient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}