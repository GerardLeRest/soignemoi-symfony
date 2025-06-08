<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Patient;
use App\Entity\User;
use Exception;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class ListeSejoursController extends AbstractController
{
    #[Route('/liste/sejours', name: 'app_liste_sejours')]
    #[IsGranted('ROLE_USER')]

    public function donneesEntrees(Request $request, EntityManagerInterface $emi): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si l'utilisateur est bien de type User
        if ($user instanceof User) {
            // Récupérer l'ID de l'utilisateur connecté
            $userId = $user->getId();
        } else {
            // Utilisateur non connecté, on renvoie une erreur
            throw $this->createAccessDeniedException('Utilisateur non connecté.');
        }

        try {
            // Création de la requête pour récupérer les séjours de l'utilisateur
            $qb = $emi->createQueryBuilder();
            $qb->select('s.dateDebut', 's.dateFin', 's.motifSejour', 's.specialite', 's.medecinSouhaite')
                ->from(Patient::class, 'p')
                ->join('p.sejours', 's')
                ->where('p.id = :idPatient')
                ->setParameter('idPatient', $userId);

            $query = $qb->getQuery();
            $donnees = $query->getResult(); // Tableau d'objets
            
            // Transformation en un tableau associatif
            $tableauSejours = $this->creationTableau($donnees);

            // Retourner la réponse avec les données
            return $this->render('sejours/index.html.twig', [
                'tableau' => $tableauSejours,
            ]);

        } catch (Exception $e) {
            return new JsonResponse(['Erreur' => $e->getMessage()]);
        }
    }

    // Fonction pour transformer les données en tableau associatif
    public function creationTableau(array $tableau): array
    {
        $data = [];
        foreach ($tableau as $element) {
            $data[] = [
                'dateDebut' => $element['dateDebut']->format('Y/m/d'),
                'dateFin' => isset($element['dateFin']) ? $element['dateFin']->format('Y/m/d') : "",
                'motifSejour' => $element['motifSejour'],
                'specialite' => $element['specialite'],
                'medecinSouhaite' => isset($element['medecinSouhaite']) ? $element['medecinSouhaite'] : "",
            ];
        }
        return $data;
    }
}

