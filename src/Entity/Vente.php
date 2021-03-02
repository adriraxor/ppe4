<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente")
 * @ORM\Entity(repositoryClass="App\Repository\VenteRepository")
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

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }

    public function getNumeroCommande(): ?string
    {
        return $this->numeroCommande;
    }

    public function setNumeroCommande(?string $numeroCommande): self
    {
        $this->numeroCommande = $numeroCommande;

        return $this;
    }

    public function getDateVente(): ?\DateTimeInterface
    {
        return $this->dateVente;
    }

    public function setDateVente(?\DateTimeInterface $dateVente): self
    {
        $this->dateVente = $dateVente;

        return $this;
    }


}
