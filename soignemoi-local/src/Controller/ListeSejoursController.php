<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Patient;
use Exception;

final class ListeSejoursController extends AbstractController
{
    #[Route('/soignemoi-local/liste/sejours', name: 'app_liste_sejours')]
    public function donneesEntrees (Request $request, EntityManagerInterface $emi) : Response
    {
        $id = 1; // On simule uniquement pour le patient 1

        try {
            $qb = $emi->createQueryBuilder();
            $qb->select('s.dateDebut', 's.dateFin', 's.motifSejour', 's.specialite', 's.medecinSouhaite')
                ->from(Patient::class, 'p')
                ->join('p.sejours', 's')
                ->where('p.id = :idPatient');
            $qb->setParameter('idPatient', $id);
            $query = $qb->getQuery();
            $donnees = $query->getResult(); //tableau d'objets
            //transformation en un tableau associatif
            $tableauSejours = $this->creationTableau($donnees);
            return $this->render('sejours/index.html.twig', [
                'tableau' => $tableauSejours
            ]);  
        } catch(Exception $e){
            return new JsonResponse(["Erreur" => $e->getMessage()]);
        }
        
    }

    public function creationTableau(array $tableau): array{
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
