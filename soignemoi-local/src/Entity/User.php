<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column(type: 'json')]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
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
    private ?string $password = null;

    // Relation OneToOne avec Patient
    // Côté inverse de la relation OneToOne
    #[ORM\OneToOne(targetEntity: Patient::class, mappedBy: 'user')]
    private ?Patient $patient = null;
    
    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getPatient() : Patient {
        return $this->patient;
    }

    public function setPatient(Patient $patient): static{
        $this->patient = $patient;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
