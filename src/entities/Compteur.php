<?php
// namespace src\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity 
 * @ORM\Table(name="compteur")
 */
class Compteur {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $numCompteur;
    /**
     * @ORM\Column(type="integer")
    */
    private $relever;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * @ORM\OneToOne(targetEntity="Attribution")
     * @ORM\JoinColumn(name="id_attribution", referencedColumnName="idAttribution", nullable=true)
     */
    private $idAttributionF;

    /**
     * One Compteur has many Consommations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Consommation", mappedBy="numCompteurF")
     */
    private $idConsoF;

    public function __construct () {
        $this->idConsoF = new ArrayCollection();

    }
    

    /**
     * Get the value of numCompteur
     */ 
    public function getNumCompteur()
    {
        return $this->numCompteur;
    }

    /**
     * Set the value of numCompteur
     *
     * @return  self
     */ 
    public function setNumCompteur($numCompteur)
    {
        $this->numCompteur = $numCompteur;

        return $this;
    }

    /**
     * Get the value of relever
     */ 
    public function getRelever()
    {
        return $this->relever;
    }

    /**
     * Set the value of relever
     *
     * @return  self
     */ 
    public function setRelever($relever)
    {
        $this->relever = $relever;

        return $this;
    }

    /**
     * Get the value of idUserF
     */ 
    public function getIdUserF()
    {
        return $this->idUserF;
    }

    /**
     * Set the value of idUserF
     *
     * @return  self
     */ 
    public function setIdUserF($idUserF)
    {
        $this->idUserF = $idUserF;

        return $this;
    }

    /**
     * Get the value of idAttributionF
     */ 
    public function getIdAttributionF()
    {
        return $this->idAttributionF;
    }

    /**
     * Set the value of idAttributionF
     *
     * @return  self
     */ 
    public function setIdAttributionF($idAttributionF)
    {
        $this->idAttributionF = $idAttributionF;

        return $this;
    }


    /**
     * Get one Compteur has many Consommations. This is the inverse side.
     */ 
    public function getIdConsoF()
    {
        return $this->idConsoF;
    }

    /**
     * Set one Compteur has many Consommations. This is the inverse side.
     *
     * @return  self
     */ 
    public function setIdConsoF($idConsoF)
    {
        $this->idConsoF = $idConsoF;

        return $this;
    }
}