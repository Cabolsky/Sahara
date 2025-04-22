<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich; // Ajout de l'import de VichUploader

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[Vich\Uploadable] // Ajout de l'annotation @Vich\Uploadable
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: "text")] 
    private ?string $description = null;

    /**
     * @Vich\UploadableField(mapping="general_file", fileNameProperty="photo") // Ajout de l'annotation pour gérer l'upload
     * @var File|null
     */
    private ?File $photoFile = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    // Méthode pour le champ photoFile
    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }

    public function setPhotoFile(?File $photoFile = null): void
    {
        $this->photoFile = $photoFile;

        if ($photoFile) {
            // Si un fichier est téléchargé, on peut mettre à jour une propriété updatedAt (si tu en as une)
        }
    }
}
