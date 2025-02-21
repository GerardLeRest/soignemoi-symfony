<?php

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Avis;
use App\Entity\Patient;
use App\Entity\Medecin;

final class AvisController extends AbstractController{

private EntityManagerInterface $emi;
    
    public function __construct(EntityManagerInterface $emi)
    {
        $this->emi = $emi;
    }

    #[Route('soignemoi-local/formulaireAvis', name: 'medecin.avis', methods: ['POST'])]
    public function verification(Request $request): Response
    {
        // recupération de donnees JSON et transformation en tableau associatif
        $donnees = json_decode($request->getContent(), true);

        // vérifcation de l'absence des données
        if (empty($donnees['date']) || empty($donnees['libelle']) ||
            empty(['description']) || empty($donnees['idMedecin']) ||
            empty($donnees['idPatient'])){
                return $this->json(['error' => 'erreur de saisie dans au moins un champ'], 400);
        }
        else{
            return $this->validation(
                $donnees['libelle'], 
                (int)$donnees['idMedecin'], 
                (int)$donnees['idPatient'], 
                $donnees['date'], 
                $donnees['description']
            );
        } 
    } 
    
    public function validation(string $libelle, int $idMedecin, int $idPatient, 
                               string $date, string $description) : Response{
        
        $avis = new Avis();
        // Récupération des entités Patient et Medecin
        $patient = $this->emi->find(Patient::class, $idPatient);
        $medecin = $this->emi->find(Medecin::class, $idMedecin);
        
        
        $avis->setLibelle($libelle);
        $avis->setMedecin($medecin);
        $avis->setPatient($patient);
        $dateObject = \DateTimeImmutable::createFromFormat('d/m/Y', $date);
        $avis->setDate($dateObject);
        $avis->setDescription($description);

        try {
            $this->emi->persist($avis);
            $this->emi->flush();
            return $this->json(['message' => 'Données enregistrées']);
        } catch (\Exception $e) {
            return $this->json(['erreur' => 'Erreur de transfert : ' . $e->getMessage()]);
        } 
    }
}