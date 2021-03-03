<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Effectuer
 *
 * @ORM\Table(name="effectuer", indexes={@ORM\Index(name="idVente", columns={"idVente", "idUser"}), @ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="IDX_985281509F4E6951", columns={"idVente"})})
 * @ORM\Entity
 */
class Effectuer
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
     * @var \Vente
     *
     * @ORM\ManyToOne(targetEntity="Vente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVente", referencedColumnName="idVente")
     * })
     */
    private $idvente;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;


}
