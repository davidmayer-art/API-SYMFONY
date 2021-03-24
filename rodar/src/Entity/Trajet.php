<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TrajetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TrajetRepository::class)
 */
class Trajet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $debut_trajet;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fin_trajet;

    /**
     * @ORM\Column(type="integer")
     */
    private $temps_trajet;

    /**
     * @ORM\Column(type="float")
     */
    private $cout;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $evaluation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="trajets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $username;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebutTrajet(): ?\DateTimeInterface
    {
        return $this->debut_trajet;
    }

    public function setDebutTrajet(\DateTimeInterface $debut_trajet): self
    {
        $this->debut_trajet = $debut_trajet;

        return $this;
    }

    public function getFinTrajet(): ?\DateTimeInterface
    {
        return $this->fin_trajet;
    }

    public function setFinTrajet(\DateTimeInterface $fin_trajet): self
    {
        $this->fin_trajet = $fin_trajet;

        return $this;
    }

    public function getTempsTrajet(): ?int
    {
        return $this->temps_trajet;
    }

    public function setTempsTrajet(int $temps_trajet): self
    {
        $this->temps_trajet = $temps_trajet;

        return $this;
    }

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(float $cout): self
    {
        $this->cout = $cout;

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(?int $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUsername(): ?User
    {
        return $this->username;
    }

    public function setUsername(?User $username): self
    {
        $this->username = $username;

        return $this;
    }
}
