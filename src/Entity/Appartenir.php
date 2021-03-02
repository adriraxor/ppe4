<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenir
 *
 * @ORM\Table(name="appartenir", indexes={@ORM\Index(name="Id_Categorie", columns={"Id_Categorie"})})
 * @ORM\Entity(repositoryClass="App\Repository\AppartenirRepository")
 */
class Appartenir
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
     * @ORM\Column(name="Id_Categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategorie;

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }


}
