<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Prescription;
use App\Entity\Patient;
use App\Entity\Medecin;

final class PrescriptionController extends AbstractController
{
    private EntityManagerInterface $emi;

    public function __construct (EntityManagerInterface $emi){
        $this->emi = $emi;
    }

    #[Route('soignemoi-local/formulairePrescription', name: 'medecin.prescriptions', methods: ['POST'])]
    public function verification(Request $request): Response
    {
        // recupération de donnees JSON et transformation en tableau associatif
        $donnees = json_decode($request->getContent(), true); 
        if (empty($donnees['nomMedicament']) || empty($donnees['posologie'])
            || empty($donnees['dateDeDebut']) || empty($donnees['dateDeFin'])
            || empty($donnees['idMedecin']) || empty($donnees['idPatient'])){
                return $this->json (["message" => "un des champs est vide"]);
            }
        else{
            return $this->validation($donnees['nomMedicament'],
                       $donnees['posologie'],
                       $donnees['dateDeDebut'],
                       $donnees['dateDeFin'],
                       $donnees['idMedecin'],
                       $donnees['idPatient']);
        }
    }
    public function validation(string $nomMedicament, string $posologie,
                               string $dateDeDebut, string $dateDeFin,
                               string $idMedecin, string $idPatient){
                        
        $prescription = new Prescription;
        // Récupération des entités Patient et Medecin
        $patient = $this->emi->find(Patient::class, $idPatient);
        $medecin = $this->emi->find(Medecin::class, $idMedecin);
        $prescription->setPatient($patient);
        $prescription->setMedecin($medecin);  
        $prescription->setNomMedicament($nomMedicament);
        $prescription->setPosologie($posologie);
        $dateDeDebutObject = \DateTimeImmutable::createFromFormat('d/m/Y', $dateDeDebut);
        $prescription->setDateDeDebut($dateDeDebutObject);
        $dateDeFinObject = \DateTimeImmutable::createFromFormat('d/m/Y', $dateDeFin);
        $prescription->setDateDeFin($dateDeFinObject);

        try{
            $this->emi->persist($prescription);
            $this->emi->flush();
            return $this->json(["message" => "les données ont été enregistrées"]);
        }
        catch (\Exception $e) {
            return $this->json(['erreur' => 'Erreur de transfert : ' . $e->getMessage()]);
        }
    }
}
