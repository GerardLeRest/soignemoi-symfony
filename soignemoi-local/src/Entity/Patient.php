<?php 
// src/Entity/Patient.php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient implements PasswordAuthenticatedUserInterface //interface -> mot de passe Symfony
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    //attaché au formulaire
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le prénom ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    //attaché au formulaire
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    //attaché au formulaire
    #[Assert\NotBlank(message: "L'adresse est obligatoire.")]
    #[Assert\Length(
        min: 10,
        max: 150,
        minMessage: "L'adresse postale doit contenir au moins {{ limit }} caractères.",
        maxMessage: "L'adresse postale ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $adressePostale = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $email = null;

    #[ORM\Column(length: 100)]
    //attaché au formulaire
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.")]
    #[Assert\Length(
        min: 8,
        max: 20,
        minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le mot de passe ne peut pas contenir plus de {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/[A-Z]/",
        message: "Le mot de passe doit contenir au moins une lettre majuscule."
    )]
    #[Assert\Regex(
        pattern: "/[a-z]/",
        message: "Le mot de passe doit contenir au moins une lettre minuscule."
    )]
    #[Assert\Regex(
        pattern: "/[0-9]/",
        message: "Le mot de passe doit contenir au moins un chiffre."
    )]
    #[Assert\Regex(
        pattern: "/[\W_]/",
        message: "Le mot de passe doit contenir au moins un caractère spécial (ex: !, @, #, $, %)."
    )]
    private ?string $motDePasse = null;

    #[ORM\OneToMany(targetEntity: Sejour::class, mappedBy: 'patient')]  // Modifié ici
    private Collection $sejours;

    
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'patient')]  // Modifié ici
    private Collection $aviss;  // Nom correct ici (pas "avis")

    /**
     * @var Collection<int, Prescription>
     */
    #[ORM\OneToMany(targetEntity: Prescription::class, mappedBy: 'patient')]  // Modifié ici
    private Collection $prescriptions;

    public function __construct()
    {
        $this->sejours = new ArrayCollection();
        $this->aviss = new ArrayCollection();  // Correct ici
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

    public function getAdressePostale(): ?string
    {
        return $this->adressePostale;
    }

    public function setAdressePostale(string $adressePostale): static
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): static
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    // Méthode pour Symfony
    public function getPassword(): ?string
    {
        return $this->motDePasse;
    }

    public function getSejours(): Collection
    {
        return $this->sejours;
    }

    public function addSejour(Sejour $sejour): static
    {
        if (!$this->sejours->contains($sejour)) {
            $this->sejours->add($sejour);
            $sejour->setPatient($this);  // Modifié ici
        }

        return $this;
    }

    public function removeSejour(Sejour $sejour): static
    {
        if ($this->sejours->removeElement($sejour)) {
            if ($sejour->getPatient() === $this) {
                $sejour->setPatient(null);
            }
        }

        return $this;
    }

    public function getAviss(): Collection  // Modifié ici : "getAvis" devient "getAviss"
    {
        return $this->aviss;  // Correct ici
    }

    public function addAvis(Avis $avis): static  // Correct ici : "addAvis"
    {
        if (!$this->aviss->contains($avis)) {  // Correct ici : "aviss"
            $this->aviss->add($avis);
            $avis->setPatient($this);  // Modifié ici
        }

        return $this;
    }

    public function removeAvis(Avis $avis): static  // Correct ici : "removeAvis"
    {
        if ($this->aviss->removeElement($avis)) {  // Correct ici : "aviss"
            if ($avis->getPatient() === $this) {
                $avis->setPatient(null);
            }
        }

        return $this;
    }

    public function getPrescriptions(): Collection
    {
        return $this->prescriptions;
    }

    public function addPrescription(Prescription $prescription): static
    {
        if (!$this->prescriptions->contains($prescription)) {
            $this->prescriptions->add($prescription);
            $prescription->setPatient($this);  // Modifié ici
        }

        return $this;
    }

    public function removePrescription(Prescription $prescription): static
    {
        if ($this->prescriptions->removeElement($prescription)) {
            if ($prescription->getPatient() === $this) {
                $prescription->setPatient(null);
            }
        }

        return $this;
    }
}
