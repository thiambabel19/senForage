<?php
// namespace src\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity 
 * @ORM\Table(name="reglement")
 */
class Reglement {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $numReglement;
    /**
     * @ORM\Column(type="date")
    */
    private $dateReglement;
    /**
     * @ORM\OneToMany(targetEntity="Facture", mappedBy="numReglementF")
     */
    private $numFactureF;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
     */
    private $idUserF;

    public function __construct () {
        $this->numFactureF = new ArrayCollection ();
        $this->dateReglement = new \DateTime();
    }
    

    /**
     * Get the value of numReglement
     */ 
    public function getNumReglement()
    {
        return $this->numReglement;
    }

    /**
     * Set the value of numReglement
     *
     * @return  self
     */ 
    public function setNumReglement($numReglement)
    {
        $this->numReglement = $numReglement;

        return $this;
    }

    /**
     * Get the value of dateReglement
     */ 
    public function getDateReglement()
    {
        return $this->dateReglement;
    }

    /**
     * Set the value of dateReglement
     *
     * @return  self
     */ 
    public function setDateReglement($dateReglement)
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    /**
     * Get the value of numFactureF
     */ 
    public function getNumFactureF()
    {
        return $this->numFactureF;
    }

    /**
     * Set the value of numFactureF
     *
     * @return  self
     */ 
    public function setNumFactureF($numFactureF)
    {
        $this->numFactureF = $numFactureF;

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
}