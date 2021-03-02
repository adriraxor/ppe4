<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creer
 *
 * @ORM\Table(name="creer", indexes={@ORM\Index(name="Id_Facture", columns={"Id_Facture"})})
 * @ORM\Entity(repositoryClass="App\Repository\CreerRepository")
 */
class Creer
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvente;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFacture;

    /**
     * @ORM\ManyToOne(targetEntity=Vente::class, inversedBy="CreerRelationTest")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idVente;

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function setIdVente(?Vente $idVente): self
    {
        $this->idVente = $idVente;

        return $this;
    }


}
