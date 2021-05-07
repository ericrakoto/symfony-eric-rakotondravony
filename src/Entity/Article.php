<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;


    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateModif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Texte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Auteur::class, inversedBy="article")
     */
    private $auteur;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

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


    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->DateModif;
    }

    public function setDateModif(?\DateTimeInterface $DateModif): self
    {
        $this->DateModif = $DateModif;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->Texte;
    }

    public function setTexte(?string $Texte): self
    {
        $this->Texte = $Texte;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

}
