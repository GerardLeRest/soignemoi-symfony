<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Sejour;
use App\Entity\Patient;
use App\Entity\User;
use App\Form\SejourFormType;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class SejourController extends AbstractController
{
    #[Route('/sejour', name: 'app_formulaire_sejour')]
    #[IsGranted('ROLE_PATIENT')]
    public function new(Request $request, EntityManagerInterface $emi): Response
    {
        // Crée une nouvelle instance de Sejour
        $sejour = new Sejour();

        // Crée le formulaire
        $form = $this->createForm(SejourFormType::class, $sejour);
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // Récupération de l'utilisateur connecté
            $user = $this->getUser();

            if (!$user instanceof User) {
                // Utilisateur non connecté, on renvoie une erreur
                throw $this->createAccessDeniedException('Utilisateur non connecté.');
            }

            // Récupération du patient correspondant à l'utilisateur connecté
            $patient = $emi->getRepository(Patient::class)
                           ->findOneBy(['user' => $user]);

            if (!$patient) {
                throw $this->createNotFoundException('Aucun patient associé à cet utilisateur.');
            }

            // Association du patient au séjour
            $sejour->setPatient($patient);

            // Enregistrement en base de données
            $emi->persist($sejour);
            $emi->flush();

            // Redirige vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // Affichage du formulaire dans le template
        return $this->render('sejour/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}