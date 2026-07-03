<?php

namespace App\Controller;

use App\Entity\Secretaire;
use App\Form\SecretaireFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecretaireController extends AbstractController
{
    #[Route('/formulaire/secretaire', name: 'app_secretaire')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $secretaire = new Secretaire();

        $form = $this->createForm(SecretaireFormType::class, $secretaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($secretaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_home'); 
        }

        return $this->render('secretaire/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}