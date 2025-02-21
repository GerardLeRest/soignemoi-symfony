<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Medecin;
use Exception;

final class IdMedecinController extends AbstractController
{
    private EntityManagerInterface $emi;
    
    public function __construct(EntityManagerInterface $emi)
    {
        $this->emi = $emi;
    }

    #[Route('soignemoi-local/idMedecin', name: 'medecin.idMedecin', methods: ['POST'])]
    public function acquisitionIdMedecin(Request $request): Response
    {
        // recupération de donnees JSON et transformation en tableau associatif
        $donnees = json_decode($request->getContent(), true);
    
        // contrôle de la présence des donnees
        if (empty($donnees['prenom']) || empty($donnees['nom'])){
            return new Response('le champ du nom ou du prénom est manquant');
        }
        else{
            return $this->determinationIdMedecin($donnees['prenom'], $donnees['nom']);
        }
    }

    public function determinationIdMedecin(string $prenom, string $nom): Response
    {
        try {
            $qb = $this->emi->createQueryBuilder();
            $qb->select('m.id')
            ->from(Medecin::class, 'm')
            ->where('m.prenom = :prenom')
            ->andWhere('m.nom = :nom') // Séparation de la condition avec andWhere()
            ->setParameter('prenom', $prenom)
            ->setParameter('nom', $nom);

            $query = $qb->getQuery();
            $resultat = $query->getOneOrNullResult();
            if ($resultat) {
                return $this->json(['idMedecin' => strval($resultat['id'])]); // strval: conversion en string
            } else {
                return $this->json(['idMedecin' => null]);
            }
        } catch (\Exception $e) {
            return new JsonResponse(['erreur' => 'Erreur : ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}