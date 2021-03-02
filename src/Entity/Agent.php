<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent", indexes={@ORM\Index(name="idProfil", columns={"idProfil"})})
 * @ORM\Entity(repositoryClass="App\Repository\AgentRepository")
 */
class Agent
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAgent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_telephone", type="string", length=50, nullable=true)
     */
    private $numTelephone;

    /**
     * @var int
     *
     * @ORM\Column(name="idProfil", type="integer", nullable=false)
     */
    private $idprofil;

    public function getIdagent(): ?int
    {
        return $this->idagent;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumTelephone(): ?string
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(?string $numTelephone): self
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    public function getIdprofil(): ?int
    {
        return $this->idprofil;
    }

    public function setIdprofil(int $idprofil): self
    {
        $this->idprofil = $idprofil;

        return $this;
    }


}
