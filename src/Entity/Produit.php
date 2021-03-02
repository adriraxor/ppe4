<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;
use http\Env\Response;
use PhpParser\Node\Scalar\String_;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_produit", type="string", length=50, nullable=true)
     */
    private $nomProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tarif_produit", type="integer", nullable=true)
     */
    private $tarifProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="popularite", type="integer", nullable=true)
     */
    private $popularite;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Apparition;

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(?string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getTarifProduit(): ?int
    {
        return $this->tarifProduit;
    }

    public function setTarifProduit(?int $tarifProduit): self
    {
        $this->tarifProduit = $tarifProduit;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPopularite(): ?int
    {
        return $this->popularite;
    }

    public function setPopularite(?int $popularite): self
    {
        $this->popularite = $popularite;

        return $this;
    }


    public function getDateApparition(): ?\DateTimeInterface
    {
        return $this->Date_Apparition;
    }


    public function setDateApparition(?\DateTimeInterface $Date_Apparition): self
    {
        $this->Date_Apparition = $Date_Apparition;

        return $this;
    }

}
