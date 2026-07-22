<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class ApiLoginController extends AbstractController
{
    #[Route('/api/secretariat/login', name: 'api_secretariat_login', methods: ['POST'])]
    public function login(
        Request $request,
        EntityManagerInterface $emi,
        UserPasswordHasherInterface $passwordHasher
    ): JsonResponse {
        $donnees = json_decode($request->getContent(), true);
        // s'il n'y a pas d'email, $email = null
        $email = $donnees['email'] ?? null;
        $motDePasse = $donnees['password'] ?? null;

        if (!$email || !$motDePasse) {
            return $this->json([
                'succes' => false,
                'message' => 'Email et mot de passe obligatoires.'
            ], 400);
        }

        // recherche le premier utilisateur $user ayant l'email $email
        $user = $emi->getRepository(User::class)->findOneBy([
            'email' => $email
        ]);

        // s'il n'y a pas d'utilisateur ou de mot de passe valide
        if (!$user || !$passwordHasher->isPasswordValid($user, $motDePasse)) {
            return $this->json([
                'succes' => false,
                'message' => 'Email ou mot de passe incorrect.'
            ], 401);
        }

        if (!in_array('ROLE_SECRETAIRE', $user->getRoles(), true)) {
            return $this->json([
                'succes' => false,
                'message' => 'Accès réservé au secrétariat.'
            ], 403);
        }

        return $this->json([
            'succes' => true,
            'message' => 'Identification réussie.',
            'utilisateur' => [
                'email' => $user->getUserIdentifier(),
                'roles' => $user->getRoles()
            ]
        ]);
    }
}
