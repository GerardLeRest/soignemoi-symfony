<?php

// src/Controller/PatientController.php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\formulaire;
use App\Entity\User;
use App\Form\PatientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    #[Route('soignemoi-local/formulaire/patient', name: 'app_patient')]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $emi): Response
    {
        // Crée une nouvelle instance de Patient
        $patient = new Patient();

        // Crée une nouvelle instance de User
        $user = new User;

        // Crée le formulaire
        $form = $this->createForm(PatientType::class, $patient);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            //Récupère le mail et le met dans la variable mail de l'objet User
            $user->setEmail($form->get('mail')->getData());
            // Récupère le mot de passe en clair du formulaire
            $passwordEnClair = $form->get('password')->getData();
            $passwordHache = $passwordHasher->hashPassword($user, $passwordEnClair);
            $user->setPassword($passwordHache);

            // Enregistre le patient en base de données
            $emi->persist($patient);
            $emi->flush();

            // Redirige vers la page d'accueil
            return $this->redirectToRoute('app_accueil');
        }

        // Affiche le formulaire dans le template
        return $this->render('patient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
