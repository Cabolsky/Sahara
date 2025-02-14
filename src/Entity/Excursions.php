<?php

namespace App\Entity;

use App\Repository\ExcursionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcursionsRepository::class)]
class Excursions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $photoCards = null;

    #[ORM\Column(length: 255)]
    private ?string $titreCards = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteCards = null;

    #[ORM\Column(length: 255)]
    private ?string $photoHeader = null;

    #[ORM\Column(length: 255)]
    private ?string $villeDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $villeArrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $nombrePersonnes = null;

    #[ORM\Column(length: 255)]
    private ?string $duree = null;

    #[ORM\Column(length: 255)]
    private ?string $hebergement = null;

    #[ORM\Column(length: 255)]
    private ?string $repas = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $photoJour1 = null;

    #[ORM\Column(length: 255)]
    private ?string $titreJour1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteJour1 = null;

    #[ORM\Column]
    private ?bool $disponible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoCards(): ?string
    {
        return $this->photoCards;
    }

    public function setPhotoCards(string $photoCards): static
    {
        $this->photoCards = $photoCards;

        return $this;
    }

    public function getTitreCards(): ?string
    {
        return $this->titreCards;
    }

    public function setTitreCards(string $titreCards): static
    {
        $this->titreCards = $titreCards;

        return $this;
    }

    public function getTexteCards(): ?string
    {
        return $this->texteCards;
    }

    public function setTexteCards(string $texteCards): static
    {
        $this->texteCards = $texteCards;

        return $this;
    }

    public function getPhotoHeader(): ?string
    {
        return $this->photoHeader;
    }

    public function setPhotoHeader(string $photoHeader): static
    {
        $this->photoHeader = $photoHeader;

        return $this;
    }

    public function getVilleDepart(): ?string
    {
        return $this->villeDepart;
    }

    public function setVilleDepart(string $villeDepart): static
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee(string $villeArrivee): static
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    public function getNombrePersonnes(): ?string
    {
        return $this->nombrePersonnes;
    }

    public function setNombrePersonnes(string $nombrePersonnes): static
    {
        $this->nombrePersonnes = $nombrePersonnes;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getHebergement(): ?string
    {
        return $this->hebergement;
    }

    public function setHebergement(string $hebergement): static
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    public function getRepas(): ?string
    {
        return $this->repas;
    }

    public function setRepas(string $repas): static
    {
        $this->repas = $repas;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPhotoJour1(): ?string
    {
        return $this->photoJour1;
    }

    public function setPhotoJour1(string $photoJour1): static
    {
        $this->photoJour1 = $photoJour1;

        return $this;
    }

    public function getTitreJour1(): ?string
    {
        return $this->titreJour1;
    }

    public function setTitreJour1(string $titreJour1): static
    {
        $this->titreJour1 = $titreJour1;

        return $this;
    }

    public function getTexteJour1(): ?string
    {
        return $this->texteJour1;
    }

    public function setTexteJour1(string $texteJour1): static
    {
        $this->texteJour1 = $texteJour1;

        return $this;
    }

    public function isDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): static
    {
        $this->disponible = $disponible;

        return $this;
    }
}
