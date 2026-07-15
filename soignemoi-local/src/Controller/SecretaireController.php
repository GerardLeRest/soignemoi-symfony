<?php

namespace App\Controller;

use App\Form\SecretaireFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class SecretaireController extends AbstractController
{
    #[Route('/formulaire/secretaire', name: 'app_secretaire')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $form = $this->createForm(SecretaireFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->get('userForm')->getData();
            $secretaire = $form->get('secretaireForm')->getData();

            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPassword())
            );

            $user->setRoles(['ROLE_SECRETAIRE']);

            $secretaire->setUser($user);
            
            $entityManager->persist($user);
            $entityManager->persist($secretaire);
            
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('secretaire/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
