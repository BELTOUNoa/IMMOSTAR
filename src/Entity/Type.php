<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bien", mappedBy="id_type")
     */
    private $lesBiens;

    public function __construct()
    {
        $this->lesBiens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getLesBiens(): Collection
    {
        return $this->lesBiens;
    }

    public function addLesBien(Bien $lesBien): self
    {
        if (!$this->lesBiens->contains($lesBien)) {
            $this->lesBiens[] = $lesBien;
            $lesBien->setIdType($this);
        }

        return $this;
    }

    public function removeLesBien(Bien $lesBien): self
    {
        if ($this->lesBiens->contains($lesBien)) {
            $this->lesBiens->removeElement($lesBien);
            // set the owning side to null (unless already changed)
            if ($lesBien->getIdType() === $this) {
                $lesBien->setIdType(null);
            }
        }

        return $this;
    }
}
