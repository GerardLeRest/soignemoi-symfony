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
    #[Route('soignemoi-local/formulaire/medecin', name: 'app_formulaire_medecin')]
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

            // Redirige vers la page d'accueil
            return $this->redirectToRoute('app_accueil'); 
        }

        // Affiche le formulaire dans le template
        return $this->render('medecin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
