<?php

namespace App\Controller;

use App\Form\UserMedecinFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class MedecinController extends AbstractController
{
    #[Route('/formulaire/medecin', name: 'app_formulaire_medecin')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        // Création du formulaire
        $form = $this->createForm(UserMedecinFormType::class);

        // Traitement de la requête
        $form->handleRequest($request);

        // Vérification du formulaire
        if ($form->isSubmitted() && $form->isValid()) {

            // Récupération des données
            $data = $form->getData();
            $user = $data['userForm'];
            $medecin = $data['medecinForm'];

            // Hachage du mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword($user, $user->getPassword())
            );

            // Attribution du rôle et liaison avec le médecin
            $user->setRoles(['ROLE_MEDECIN']);
            $medecin->setUser($user);

            // Enregistrement en base
            $entityManager->persist($user);
            $entityManager->persist($medecin);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        // Affichage du formulaire
        return $this->render('medecin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
