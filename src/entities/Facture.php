<?php
// namespace src\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity 
 * @ORM\Table(name="facture")
 */
class Facture {
    
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $numfacture;
    /**
     * @ORM\Column(type="integer")
    */
    private $montantFacture;
    /**
     * @ORM\Column(type="date")
    */
    private $dateFacture;
    /**
     * @ORM\ManyToOne(targetEntity="Reglement", inversedBy="numFactureF")
     * @ORM\JoinColumn(name="numero_reglement", referencedColumnName="numReglement")
     */
    private $numReglementF;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * @ORM\OneToOne(targetEntity="Consommation", inversedBy="numFactureF")
     * @ORM\JoinColumn(name="consommation_id", referencedColumnName="idConso")
     */
    private $idConsoF;

    public function __construct () {
       
    }
    

    /**
     * Get the value of numfacture
     */ 
    public function getNumfacture()
    {
        return $this->numfacture;
    }

    /**
     * Set the value of numfacture
     *
     * @return  self
     */ 
    public function setNumfacture($numfacture)
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    /**
     * Get the value of montantFacture
     */ 
    public function getMontantFacture()
    {
        return $this->montantFacture;
    }

    /**
     * Set the value of montantFacture
     *
     * @return  self
     */ 
    public function setMontantFacture($montantFacture)
    {
        $this->montantFacture = $montantFacture;

        return $this;
    }

    /**
     * Get the value of dateFacture
     */ 
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set the value of dateFacture
     *
     * @return  self
     */ 
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get the value of numReglementF
     */ 
    public function getNumReglementF()
    {
        return $this->numReglementF;
    }

    /**
     * Set the value of numReglementF
     *
     * @return  self
     */ 
    public function setNumReglementF($numReglementF)
    {
        $this->numReglementF = $numReglementF;

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
     * Get the value of idConsoF
     */ 
    public function getIdConsoF()
    {
        return $this->idConsoF;
    }

    /**
     * Set the value of idConsoF
     *
     * @return  self
     */ 
    public function setIdConsoF($idConsoF)
    {
        $this->idConsoF = $idConsoF;

        return $this;
    }
}