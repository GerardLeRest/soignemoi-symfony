<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PagesSimplesController extends AbstractController
{
    #[Route('soignemoi-local', name: 'page.accueil', methods: ['GET'])]
    public function accueil(): Response
    {
        return $this->render('pages_simples/accueil.html.twig');
    }

    #[Route('soignemoi-local/services', name: 'page.services', methods: ['GET'])]
    public function services(): Response
    {
        return $this->render('pages_simples/services.html.twig');
    }

    #[Route('soignemoi-local/patients', name: 'page.patients', methods: ['GET'])]
    public function patients(): Response
    {
        return $this->render('pages_simples/patients.html.twig');
    }

    #[Route('soignemoi-local/professionnels', name: 'page.professionnels', methods: ['GET'])]
    public function professionnels(): Response
    {
        return $this->render('pages_simples/professionnels.html.twig');
    }
}
