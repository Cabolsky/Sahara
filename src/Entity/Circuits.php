<?php

namespace App\Entity;

use App\Repository\CircuitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: CircuitsRepository::class)]
#[Vich\Uploadable]
class Circuits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Vich\UploadableField(mapping: 'circuits_images', fileNameProperty: 'photoCards')]
    private ?File $photoCardsFile = null;

    #[ORM\Column(length: 255)]
    private ?string $photoCards = null;

    #[ORM\Column(length: 255)]
    private ?string $titreCards = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteCards = null;

    #[Vich\UploadableField(mapping: 'circuits_images', fileNameProperty: 'photoHeader')]
    private ?File $photoHeaderFile = null;

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

    #[ORM\Column(type: Types::STRING)]
    private ?string $prix = null;

    #[Vich\UploadableField(mapping: 'circuits_images', fileNameProperty: 'photoJour1')]
    private ?File $photoJour1File = null;

    #[ORM\Column(length: 255)]
    private ?string $photoJour1 = null;

    #[ORM\Column(length: 255)]
    private ?string $titreJour1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteJour1 = null;

    #[Vich\UploadableField(mapping: 'circuits_images', fileNameProperty: 'photoJour2')]
    private ?File $photoJour2File = null;

    #[ORM\Column(length: 255)]
    private ?string $photoJour2 = null;

    #[ORM\Column(length: 255)]
    private ?string $titreJour2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteJour2 = null;

    #[Vich\UploadableField(mapping: 'circuits_images', fileNameProperty: 'photoJour3')]
    private ?File $photoJour3File = null;

    #[ORM\Column(length: 255)]
    private ?string $photoJour3 = null;

    #[ORM\Column(length: 255)]
    private ?string $titreJour3 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texteJour3 = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private bool $disponible = true; 

    public function getDisponible(): bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

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

    public function getPhotoJour2(): ?string
    {
        return $this->photoJour2;
    }

    public function setPhotoJour2(string $photoJour2): static
    {
        $this->photoJour2 = $photoJour2;

        return $this;
    }

    public function getTitreJour2(): ?string
    {
        return $this->titreJour2;
    }

    public function setTitreJour2(string $titreJour2): static
    {
        $this->titreJour2 = $titreJour2;

        return $this;
    }

    public function getTexteJour2(): ?string
    {
        return $this->texteJour2;
    }

    public function setTexteJour2(string $texteJour2): static
    {
        $this->texteJour2 = $texteJour2;

        return $this;
    }

    public function getPhotoJour3(): ?string
    {
        return $this->photoJour3;
    }

    public function setPhotoJour3(string $photoJour3): static
    {
        $this->photoJour3 = $photoJour3;

        return $this;
    }

    public function getTitreJour3(): ?string
    {
        return $this->titreJour3;
    }

    public function setTitreJour3(string $titreJour3): static
    {
        $this->titreJour3 = $titreJour3;

        return $this;
    }

    public function getTexteJour3(): ?string
    {
        return $this->texteJour3;
    }

    public function setTexteJour3(string $texteJour3): static
    {
        $this->texteJour3 = $texteJour3;

        return $this;
    }

    // Getters and Setters for file uploads
    public function getPhotoCardsFile(): ?File
    {
        return $this->photoCardsFile;
    }

    public function setPhotoCardsFile(?File $photoCardsFile = null): void
    {
        $this->photoCardsFile = $photoCardsFile;
        if ($photoCardsFile) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getPhotoHeaderFile(): ?File
    {
        return $this->photoHeaderFile;
    }

    public function setPhotoHeaderFile(?File $photoHeaderFile = null): void
    {
        $this->photoHeaderFile = $photoHeaderFile;
        if ($photoHeaderFile) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getPhotoJour1File(): ?File
    {
        return $this->photoJour1File;
    }

    public function setPhotoJour1File(?File $photoJour1File = null): void
    {
        $this->photoJour1File = $photoJour1File;
        if ($photoJour1File) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getPhotoJour2File(): ?File
    {
        return $this->photoJour2File;
    }

    public function setPhotoJour2File(?File $photoJour2File = null): void
    {
        $this->photoJour2File = $photoJour2File;
        if ($photoJour2File) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getPhotoJour3File(): ?File
    {
        return $this->photoJour3File;
    }

    public function setPhotoJour3File(?File $photoJour3File = null): void
    {
        $this->photoJour3File = $photoJour3File;
        if ($photoJour3File) {
            $this->updatedAt = new \DateTime();
        }
    }
}
