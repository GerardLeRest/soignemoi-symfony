<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\userType;

class LoginController extends AbstractController
{
    #[Route('/formulaire/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
{
    // Récupérer l'erreur de connexion s'il y en a une
    $error = $authenticationUtils->getLastAuthenticationError();

    // Récupérer le dernier identifiant saisi par l'utilisateur
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('login/index.html.twig', [
        'last_username' => $lastUsername,
        'error' => $error,
    ]);
}

    #[Route('/formulaire/logout', name: 'app_logout')]
    public function logout(): void
    {
        // La déconnexion est gérée par Symfony
        throw new \Exception('This should never be reached!');
    }
}