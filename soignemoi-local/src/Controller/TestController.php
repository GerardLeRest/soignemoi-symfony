<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('soignemoi-local/page', name: 'test.page', methods: ['GET'])]
    public function verification(): Response
    {
        return $this->render('test/test.html.twig');
    }
}