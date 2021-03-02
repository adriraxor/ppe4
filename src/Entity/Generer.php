<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generer
 *
 * @ORM\Table(name="generer", indexes={@ORM\Index(name="idPersonnel", columns={"idAgent"})})
 * @ORM\Entity(repositoryClass="App\Repository\GenererRepository")
 */
class Generer
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
     * @ORM\Column(name="idAgent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idagent;

    public function getIdvente(): ?int
    {
        return $this->idvente;
    }

    public function getIdagent(): ?int
    {
        return $this->idagent;
    }


}
