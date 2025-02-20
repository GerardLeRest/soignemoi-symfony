<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class TestController extends AbstractController
{
private EntityManagerInterface $emi; 

public function __construct(EntityManagerInterface $emi)
{
    $this->emi = $emi;
}

    #[Route('soignemoi-local/formulaireAvis', name: 'route_test')]
    public function verification(): Response
    {
        echo "controlleur";
        return $this->render('test/test.html.twig');
    }
}