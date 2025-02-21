<?php

namespace App\Controller;

//use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sejour;
use App\Entity\Avis;
use App\Entity\Patient;
use App\Repository\MedecinRepository;
use App\Entity\Medecin;

final class SecretariatController extends AbstractController
{
    private EntityManagerInterface $emi; 
    private array $donnees; //données de la requête
  

    public function __construct(EntityManagerInterface $emi)
    {
        $this->emi = $emi;
    }

    //tous
    #[Route('soignemoi-local/tous', name: 'secretariat.tous', methods: ['GET'])]
    public function donneesTous (Request $request) : Response
    {
        try{
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.id', 'p.prenom', 'p.nom', 'p.adressePostale')
                ->from(Sejour::class, 's')
                ->join('s.patient', 'p')  // jointure avec la table des patients
                ->where('s.dateDebut = CURRENT_DATE() OR s.dateFin = CURRENT_DATE()'); // S'assurer que le séjour est en cours
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            return $this->json($this->donnees);
        } catch( Exception $e){ 
            return new JsonResponse(["Erreur" => $e->getMessage()]);
        } 
    }

    // Entrées
    #[Route('soignemoi-local/entrees', name: 'secretariat.entrees', methods: ['GET'])]
    public function donneesEntrees (Request $request) : Response
    {
        try{
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.id', 'p.prenom', 'p.nom', 'p.adressePostale')
               ->from(Sejour::class, 's')
               ->join('s.patient', 'p')
               ->Where('s.dateDebut = CURRENT_DATE()');
            
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            return new JsonResponse($this->donnees);
            //return $this->json($this->donnees);
        } catch(Exception $e){
            return new JsonResponse(["Erreur" => $e->getMessage()]);
        }
    }
   
     // Sorties
     #[Route('soignemoi-local/sorties', name: 'secretariat.sorties', methods: ['GET'])]
     public function donneesSorties (Request $request) : Response
    {
        try{
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.id', 'p.prenom', 'p.nom', 'p.adressePostale')
               ->from(Sejour::class, 's')
               ->join('s.patient', 'p')
               ->Where('s.dateFin = CURRENT_DATE()');
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            return $this->json($this->donnees);
        } catch(Exception $e){
            return new JsonResponse(["Erreur" => $e->getMessage()]);
        }
    }
    
    //---------------------------------------------------------------------------------------------------
    #[Route('soignemoi-local/details/{id}', name: 'secretariat.details', methods: ['GET'])]
    public function details (int $id, Request $request) : Response
    {
        try{
            //------------------------------------------------------------------------------------------      
            //Sejour
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.prenom', 'p.nom', 'p.email', 's.dateDebut', 's.dateFin', 's.motifSejour',
                        's.specialite', 's.medecinSouhaite')
               ->from(Patient::class, 'p') 
               ->join('p.sejours', 's') // s à sejours : collection
               ->where('p.id = :idPatient');
            $qb->setParameter('idPatient', $id);    
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            
           // Transformation des dates sur tous les enregistrements
            foreach ($this->donnees as &$donnee) {
                if ($donnee['dateDebut'] instanceof \DateTime) {   
                    $donnee['dateDebut'] = $donnee['dateDebut']->format('Y-m-d');
                }
                if ($donnee['dateFin'] instanceof \DateTime) {
                    $donnee['dateFin'] = $donnee['dateFin']? $donnee['dateFin']->format('Y-m-d') : null;
                }
            }
            $tableauSejours = $this->donnees;
            
            //------------------------------------------------------------------------------------------  
            //Medecin
            
            $qb = $this->emi->createQueryBuilder();
            $qb->select('m.prenom', 'm.nom', 'm.matricule', 'm.specialite')
               ->from(Medecin::class, 'm') 
               ->join('m.aviss','a')     //! s à avis : collection
               ->join('a.patient','p')
               ->where('p.id = :idPatient');
            
            $qb->setParameter('idPatient', $id);    
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            $tableauMedecins = $this->donnees; 
            
            //------------------------------------------------------------------------------------------  
            // Avis 
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.nom', 'p.prenom', 'a.date', 'a.libelle', 'a.description')
               ->from(Patient::class, 'p') 
               ->join('p.aviss','a') //s: collection aviss
               ->where('p.id = :idPatient');
            $qb->setParameter('idPatient', $id);    
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();
            
            // transformation des dates sur tous les enregistrements
            foreach ($this->donnees as &$donnee) {
                if ($donnee['date'] instanceof \DateTimeImmutable) {
                    // Convertir l'objet DateTimeImmutable en une chaîne formatée directement
                    $date = $donnee['date']->format('Y-m-d');
                    $donnee['date'] = $date;
                }
            }
            $tableauAvis = $this->donnees;
            
            //------------------------------------------------------------------------------------------      
            // Prescriptions
            $qb = $this->emi->createQueryBuilder();
            $qb->select('p.prenom', 'p.nom', 'pr.nomMedicament', 'pr.posologie', 'pr.dateDeDebut', 'pr.dateDeFin')
               ->from(Patient::class, 'p') 
               ->join('p.prescriptions','pr') //prescriptions : collection
               ->where('p.id = :idPatient');
            $qb->setParameter('idPatient', $id);    
            $query = $qb->getQuery();
            $this->donnees = $query->getResult();

            // transformation des dates sur tous les enregistrements
            foreach ($this->donnees as &$donnee) {
                if ($donnee['dateDeDebut'] instanceof \DateTimeImmutable) {
                    $donnee['dateDeDebut'] = $donnee['dateDeDebut']->format('Y-m-d');
                }
                if ($donnee['dateDeFin'] instanceof \DateTimeImmutable) {
                    $donnee['dateDeFin'] = $donnee['dateDeFin']->format('Y-m-d');
                }
            } 

            $tableauPrescriptions = $this->donnees; 
            //$tableauFinal = [[$tableauSejours] ,[$tableauMedecins],[],[]]; 
            $tableauFinal = [$tableauSejours, $tableauMedecins, $tableauAvis, $tableauPrescriptions];
            return $this->json($tableauFinal);  

        } catch(Exception $e){
            return new JsonResponse(["Erreur" => $e->getMessage()]);
        }
    }
}
