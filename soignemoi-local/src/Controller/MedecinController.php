<?php

namespace App\Controller;

use App\Form\MedecinFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class MedecinController extends AbstractController
{
    #[Route('/formulaire/medecin', name: 'app_medecin')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $form = $this->createForm(MedecinFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->get('userForm')->getData();
            $medecin = $form->get('medecinForm')->getData();

            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPassword())
            );

            $user->setRoles(['ROLE_MEDECIN']);

            $medecin->setUser($user);
            
            $entityManager->persist($user);
            $entityManager->persist($medecin);
            
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('medecin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
