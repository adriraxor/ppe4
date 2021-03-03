<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_facture", type="string", length=255, nullable=true)
     */
    private $numeroFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="montant_facture", type="integer", nullable=false)
     */
    private $montantFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="facture_pdf", type="blob", length=65535, nullable=false)
     */
    private $facturePdf;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vente", mappedBy="idFacture")
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
