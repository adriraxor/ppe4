<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente")
 * @ORM\Entity
 */
class Vente
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_commande", type="string", length=1024, nullable=true)
     */
    private $numeroCommande;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_vente", type="date", nullable=true)
     */
    private $dateVente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="idvente")
     */
    private $idproduit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Facture", inversedBy="idvente")
     * @ORM\JoinTable(name="creer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idVente", referencedColumnName="idVente")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Facture", referencedColumnName="Id_Facture")
     *   }
     * )
     */
    private $idFacture;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personnel", mappedBy="idvente")
     */
    private $idPersonnel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproduit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idFacture = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPersonnel = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
