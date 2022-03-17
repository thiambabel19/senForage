<?php
// namespace src\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="village")
 */
class Village {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idVillage;
    /**
     * @ORM\Column(type="string")
    */
    private $nomVillage;
    /**
     * @ORM\Column(type="string")
    */
    private $chefVillage;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    
    public function __construct () {
        
    }
    


    /**
     * Get the value of idVillage
     */ 
    public function getIdVillage()
    {
        return $this->idVillage;
    }

    /**
     * Set the value of idVillage
     *
     * @return  self
     */ 
    public function setIdVillage($idVillage)
    {
        $this->idVillage = $idVillage;

        return $this;
    }

    /**
     * Get the value of nomVillage
     */ 
    public function getNomVillage()
    {
        return $this->nomVillage;
    }

    /**
     * Set the value of nomVillage
     *
     * @return  self
     */ 
    public function setNomVillage($nomVillage)
    {
        $this->nomVillage = $nomVillage;

        return $this;
    }

    /**
     * Get one Village has chef.
     */ 
    public function getChefVillage()
    {
        return $this->chefVillage;
    }

    /**
     * Set one Village has chef.
     *
     * @return  self
     */ 
    public function setChefVillage($chefVillage)
    {
        $this->chefVillage = $chefVillage;

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