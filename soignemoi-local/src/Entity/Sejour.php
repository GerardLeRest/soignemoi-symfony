<?php

namespace App\Entity;

use App\Repository\SejourRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SejourRepository::class)]
class Sejour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Patient::class, inversedBy: 'sejour')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null; 

    #[Assert\NotNull]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDebut;

    #[Assert\GreaterThan(propertyPath: 'dateDebut', message: "La date de fin doit être après la date de début.")]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::TEXT)]
    //attaché au formulaire
    #[Assert\NotBlank(message: "Le motif du séjour est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 200,
        minMessage: "Le motif du séjour doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le motif du séjour ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $motifSejour = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La spécialité est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "La spécialité doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La spécialité ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $specialite = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(
        min: 0,
        max: 50,
        minMessage: "La spécialité doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La spécialité ne peut pas contenir plus de {{ limit }} caractères."
    )]
    private ?string $medecinSouhaite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): static
    {
        $this->patient = $patient;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getMotifSejour(): ?string
    {
        return $this->motifSejour;
    }

    public function setMotifSejour(string $motifSejour): static
    {
        $this->motifSejour = $motifSejour;

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

    public function getMedecinSouhaite(): ?string
    {
        return $this->medecinSouhaite;
    }

    public function setMedecinSouhaite(?string $medecinSouhaite): static
    {
        $this->medecinSouhaite = $medecinSouhaite;

        return $this;
    }
}

