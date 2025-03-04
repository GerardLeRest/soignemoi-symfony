<?php

// src/Controller/PatientController.php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    #[Route('soignemoi-local/formulaire-patient', name: 'nouveau_patient')]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Crée une nouvelle instance de Patient
        $patient = new Patient();

        // Crée le formulaire
        $form = $this->createForm(PatientFormType::class, $patient);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupère le mot de passe en clair du formulaire
            $motDePasseEnClair = $form->get('motDePasse')->getData(); 
            // Hash du mot de passe
            $MotDePasseHache = $passwordHasher->hashPassword($patient, $motDePasseEnClair);
            $patient->setMotDePasse($MotDePasseHache);

            // Enregistre le patient en base de données
            $entityManager->persist($patient);
            $entityManager->flush();

            // Redirige vers la page d'accueil ou de succès
            return $this->redirectToRoute('page.accueil');
        }

        // Affiche le formulaire dans le template
        return $this->render('patient/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
