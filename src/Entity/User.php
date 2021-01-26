<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields = {"email"},
 *  message = "L'email que vous avez indiqué est déjà utilisé"
 *  )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("comment:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("comment:read")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     */
    private $password;

    /**
     * [public description]
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le même mot de passe")
     * @var [type]
     */
    public $confirm_password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Espece", mappedBy="auteur")
     */
    private $especes;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role", mappedBy="users")
     */
    private $user_roles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Site", mappedBy="user")
     */
    private $sites;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BlogComment", mappedBy="auteur", orphanRemoval=true)
     */
    private $blogComments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sortie", mappedBy="auteur", orphanRemoval=true)
     */
    private $sorties;

    public function __construct()
    {
        $this->especes = new ArrayCollection();
        $this->user_roles = new ArrayCollection();
        $this->sites = new ArrayCollection();
        $this->blogComments = new ArrayCollection();
        $this->sorties = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(){}

    public function getSalt(){}

    /**
     * @return Collection|Espece[]
     */
    public function getEspeces(): Collection
    {
        return $this->especes;
    }

    public function addEspece(Espece $espece): self
    {
        if (!$this->especes->contains($espece)) {
            $this->especes[] = $espece;
            $espece->setAuteur($this);
        }

        return $this;
    }

    public function removeEspece(Espece $espece): self
    {
        if ($this->especes->contains($espece)) {
            $this->especes->removeElement($espece);
            // set the owning side to null (unless already changed)
            if ($espece->getAuteur() === $this) {
                $espece->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getUserRoles(): Collection
    {
        return $this->user_roles;
    }

    public function addUserRole(Role $userRole): self
    {
        if (!$this->user_roles->contains($userRole)) {
            $this->user_roles[] = $userRole;
            $userRole->addUser($this);
        }

        return $this;
    }

    public function removeUserRole(Role $userRole): self
    {
        if ($this->user_roles->contains($userRole)) {
            $this->user_roles->removeElement($userRole);
            $userRole->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|Site[]
     */
    public function getSites(): Collection
    {
        return $this->sites;
    }

    public function addSite(Site $site): self
    {
        if (!$this->sites->contains($site)) {
            $this->sites[] = $site;
            $site->setUser($this);
        }

        return $this;
    }

    public function removeSite(Site $site): self
    {
        if ($this->sites->contains($site)) {
            $this->sites->removeElement($site);
            // set the owning side to null (unless already changed)
            if ($site->getUser() === $this) {
                $site->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BlogComment[]
     */
    public function getBlogComments(): Collection
    {
        return $this->blogComments;
    }

    public function addBlogComment(BlogComment $blogComment): self
    {
        if (!$this->blogComments->contains($blogComment)) {
            $this->blogComments[] = $blogComment;
            $blogComment->setAuteur($this);
        }

        return $this;
    }

    public function removeBlogComment(BlogComment $blogComment): self
    {
        if ($this->blogComments->contains($blogComment)) {
            $this->blogComments->removeElement($blogComment);
            // set the owning side to null (unless already changed)
            if ($blogComment->getAuteur() === $this) {
                $blogComment->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sortie[]
     */
    public function getSorties(): Collection
    {
        return $this->sorties;
    }

    public function addSorty(Sortie $sorty): self
    {
        if (!$this->sorties->contains($sorty)) {
            $this->sorties[] = $sorty;
            $sorty->setAuteur($this);
        }

        return $this;
    }

    public function removeSorty(Sortie $sorty): self
    {
        if ($this->sorties->contains($sorty)) {
            $this->sorties->removeElement($sorty);
            // set the owning side to null (unless already changed)
            if ($sorty->getAuteur() === $this) {
                $sorty->setAuteur(null);
            }
        }

        return $this;
    }
}
