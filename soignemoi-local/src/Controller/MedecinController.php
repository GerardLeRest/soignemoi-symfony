<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Medecin;
use App\Form\MedecinType;

class MedecinController extends AbstractController
{
    #[Route('soignemoi-local/formulaire-medecin', name: 'nouveau_medecin')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Crée une nouvelle instance de Medecin
        $medecin = new Medecin();

        // Crée le formulaire
        $form = $this->createForm(MedecinType::class, $medecin);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistre le médecin en base de données
            $entityManager->persist($medecin);
            $entityManager->flush();
            return $this->redirect('/soignemoi-local');
        //Réinitialisez le formulaire en créant une nouvelle instance de l'entité et du formulaire
        $medecin = new Medecin(); // Réinitialisez l'entité
        $form = $this->createForm(MedecinType::class, $medecin); // Réinitialisez le formulaire

            // Redirige vers une page de succès
            // return $this->redirectToRoute('app_success');
        }

        // Affiche le formulaire dans le template
        return $this->render('medecin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
