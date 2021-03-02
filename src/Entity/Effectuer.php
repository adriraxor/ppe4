<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Effectuer
 *
 * @ORM\Table(name="effectuer", indexes={@ORM\Index(name="idVente", columns={"idVente"})})
 * @ORM\Entity(repositoryClass="App\Repository\EffectuerRepository")
 */
class Effectuer
{
    /**
     * @var string
     *
     * @ORM\Column(name="idClient", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclient;

    /**
     * @var int
     *
     * @ORM\Column(name="idVente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvente;

    public function getIdclient(): ?string
    {
        return $this->idclient;
    }

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }


}
