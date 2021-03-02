<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table(name="contenir", indexes={@ORM\Index(name="idVente", columns={"idVente"})})
 * @ORM\Entity(repositoryClass="App\Repository\ContenirRepository")
 */
class Contenir
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idproduit;

    /**
     * @var int
     *
     * @ORM\Column(name="idVente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantiter", type="string", length=11, nullable=true)
     */
    private $quantiter;

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
    }

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }

    public function getQuantiter(): ?string
    {
        return $this->quantiter;
    }

    public function setQuantiter(?string $quantiter): self
    {
        $this->quantiter = $quantiter;

        return $this;
    }


}
