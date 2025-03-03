<?php

// src/Entity/Medecin.php

namespace App\Entity;

use App\Repository\MedecinRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MedecinRepository::class)]
class Medecin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    //attaché au formulaire
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")] 
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le matricule est obligatoire.")]
    #[Assert\Length(min: 5, max: 10, minMessage: 
                "Le matricule doit contenir au moins {{ limit }} caractères.")]
    private ?string $matricule = null;

    #[ORM\Column(length: 100)] 
    #[Assert\NotBlank(message: "La spécialité est obligatoire.")]
    private ?string $specialite = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'medecin')]  
    private Collection $aviss;

    /**
     * @var Collection<int, Prescription>
     */
    #[ORM\OneToMany(targetEntity: Prescription::class, mappedBy: 'medecin')]  // Modifié ici
    private Collection $prescriptions;

    public function __construct()
    {
        $this->aviss = new ArrayCollection();  // "aviss" au lieu de "avis"
        $this->prescriptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAviss(): Collection  // "getAviss" au lieu de "getAvis"
    {
        return $this->aviss;  // "aviss" est correct ici
    }

    public function addAvis(Avis $avis): static  // "addAvis" reste correct mais sur "aviss"
    {
        if (!$this->aviss->contains($avis)) {  // Utilisation de "aviss"
            $this->aviss->add($avis);
            $avis->setMedecin($this);
        }

        return $this;
    }

    public function removeAvis(Avis $avis): static  // "removeAvis" reste correct
    {
        if ($this->aviss->removeElement($avis)) {  // Utilisation de "aviss"
            if ($avis->getMedecin() === $this) {
                $avis->setMedecin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prescription>
     */
    public function getPrescriptions(): Collection
    {
        return $this->prescriptions;
    }

    public function addPrescription(Prescription $prescription): static
    {
        if (!$this->prescriptions->contains($prescription)) {
            $this->prescriptions->add($prescription);
            $prescription->setMedecin($this);
        }

        return $this;
    }

    public function removePrescription(Prescription $prescription): static
    {
        if ($this->prescriptions->removeElement($prescription)) {
            if ($prescription->getMedecin() === $this) {
                $prescription->setMedecin(null);
            }
        }

        return $this;
    }
}
