<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $intitule;

    #[ORM\OneToOne(targetEntity: Organisme::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $organisme;


    #[ORM\OneToMany(mappedBy: 'formation', targetEntity: Promotion::class)]
    private $promotions;

    public function __construct()
    {
        $this->promotions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getOrganisme(): ?Organisme
    {
        return $this->organisme;
    }

    public function setOrganisme(Organisme $organisme): self
    {
        $this->organisme = $organisme;

        return $this;
    }

    public function getPromotions(): Collection
    {
        return $this->promotions;
    }

    public function setPromotion(Promotion $promotion): self
    {
        $this->promotions = $promotion;

        return $this;
    }

    public function __toString()
    {
        return $this->getIntitule();
    }
}
