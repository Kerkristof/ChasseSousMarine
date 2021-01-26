<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EspeceRepository")
 * @Vich\Uploadable
 */
class Espece
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="espece_image", fileNameProperty="imageName")
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int|null
     */
    private $imageSize;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $maille;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="especes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prise", mappedBy="espece", orphanRemoval=true)
     */
    private $prises;

    public function __construct()
    {
        $this->prises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMaille(): ?int
    {
        return $this->maille;
    }

    public function setMaille(?int $maille): self
    {
        $this->maille = $maille;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImageName(): ?string
    {
      return $this->imageName;
    }

    /**
     * @param ?null|string $imageName
     */
    public function setImageName(?string $imageName): void
    {
      $this->imageName = $imageName;
    }

    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
      return $this->imageFile;
    }


    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
        if(null !== $imageFile)
        {
          $this->updatedAt = new \DateTimeImmutable();
        }

    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * @return Collection|Prise[]
     */
    public function getPrises(): Collection
    {
        return $this->prises;
    }

    public function addPrise(Prise $prise): self
    {
        if (!$this->prises->contains($prise)) {
            $this->prises[] = $prise;
            $prise->setEspece($this);
        }

        return $this;
    }

    public function removePrise(Prise $prise): self
    {
        if ($this->prises->contains($prise)) {
            $this->prises->removeElement($prise);
            // set the owning side to null (unless already changed)
            if ($prise->getEspece() === $this) {
                $prise->setEspece(null);
            }
        }

        return $this;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }





}
