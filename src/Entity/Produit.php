<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_apparition", type="datetime", nullable=true)
     */
    private $dateApparition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vente", inversedBy="idproduit")
     * @ORM\JoinTable(name="contenir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idVente", referencedColumnName="idVente")
     *   }
     * )
     */
    private $idvente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idvente = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
