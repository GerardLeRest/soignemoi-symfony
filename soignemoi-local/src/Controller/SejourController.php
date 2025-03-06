<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Sejour;
use App\Form\SejourType;
use App\Entity\Patient;

final class SejourController extends AbstractController
{
    #[Route('soignemoi-local/formulaire/sejour', name: 'app_formulaire_sejour')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Crée une nouvelle instance de Sejour
        $sejour = new Sejour();

        // Crée le formulaire
        $form = $this->createForm(SejourType::class, $sejour);
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Simulation du patient avec ID = 1 (remplacer par un vrai patient si nécessaire)
            $patient = $entityManager->find(Patient::class, 1);
            if ($patient) {
                $sejour->setPatient($patient);
            }

            // Enregistrement en base de données
            $entityManager->persist($sejour);
            $entityManager->flush();

            // Redirige vers la page d'accueil
            return $this->redirectToRoute('app_accueil');
        }

        // Affichage du formulaire dans le template
        return $this->render('sejour/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}