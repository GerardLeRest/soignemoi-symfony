<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route("/soignemoi-local/profile", name:"app_profile", methods:['GET'])]
    public function profile()
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getuser();
        

        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }
}