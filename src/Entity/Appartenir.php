<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenir
 *
 * @ORM\Table(name="appartenir", indexes={@ORM\Index(name="idProduit", columns={"idProduit", "idCategorie"}), @ORM\Index(name="idCategorie", columns={"idCategorie"}), @ORM\Index(name="IDX_A2A0D90C391C87D5", columns={"idProduit"})})
 * @ORM\Entity
 */
class Appartenir
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="Id_Categorie")
     * })
     */
    private $idcategorie;


}
