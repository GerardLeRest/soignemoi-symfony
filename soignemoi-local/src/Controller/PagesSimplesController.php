<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PagesSimplesController extends AbstractController
{
    #[Route('/services', name: 'app_services', methods: ['GET'])]
    public function services(): Response
    {
        return $this->render('pages_simples/services.html.twig');
    }

    #[Route('/patients', name: 'app_patients', methods: ['GET'])]
    public function patients(): Response
    {
        return $this->render('pages_simples/patients.html.twig');
    }

    #[Route('/professionnels', name: 'app_professionnels', methods: ['GET'])]
    public function professionnels(): Response
    {
        return $this->render('pages_simples/professionnels.html.twig');
    }
}
