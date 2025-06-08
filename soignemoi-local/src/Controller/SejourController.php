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
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $emi): Response
    {
        // Crée une nouvelle instance de Sejour
        $sejour = new Sejour();

        // Crée le formulaire
        $form = $this->createForm(SejourFormType::class, $sejour);
        $form->handleRequest($request);

        // Vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            //récupération de l'utilsateur connecté
             $user = $this->getuser(); 
             if ($user instanceof User) {
                // Récupérer l'ID de l'utilisateur connecté
                $userId = $user->getId();
            } else {
                // Utilisateur non connecté, on renvoie une erreur
                throw $this->createAccessDeniedException('Utilisateur non connecté.');
            }

            // récupération du patient correspondant au user
            $patient = $emi->find(Patient::class,$userId); 
            if ($patient) {
                $sejour->setPatient($patient);
            }

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