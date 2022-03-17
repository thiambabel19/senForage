<?php
// namespace src\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="consommation")
 */
class Consommation {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idConso;
    /**
     * @ORM\Column(type="string")
    */
    private $periode;
    /**
     * @ORM\Column(type="integer")
    */
    private $cumule;
    /**
     * @ORM\Column(type="integer")
    */
    private $qte;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * @ORM\ManyToOne(targetEntity="Compteur", inversedBy="idConsoF")
     * @ORM\JoinColumn(name="numero_compteur", referencedColumnName="numCompteur")
     */
    private $numCompteurF;
    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="Facture", mappedBy="idConsoF")
     */
    private $numFactureF;
 
    public function __construct () {
        $this->periode = (new \DateTime())->format('my');
    }

    

    /**
     * Get the value of idConso
     */ 
    public function getIdConso()
    {
        return $this->idConso;
    }

    /**
     * Set the value of idConso
     *
     * @return  self
     */ 
    public function setIdConso($idConso)
    {
        $this->idConso = $idConso;

        return $this;
    }

    /**
     * Get the value of periode
     */ 
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set the value of periode
     *
     * @return  self
     */ 
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get the value of cumule
     */ 
    public function getCumule()
    {
        return $this->cumule;
    }

    /**
     * Set the value of cumule
     *
     * @return  self
     */ 
    public function setCumule($cumule)
    {
        $this->cumule = $cumule;

        return $this;
    }

    /**
     * Get the value of qte
     */ 
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * @return  self
     */ 
    public function setQte($qte)
    {
        $this->qte = $qte;

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
     * Get the value of numCompteurF
     */ 
    public function getNumCompteurF()
    {
        return $this->numCompteurF;
    }

    /**
     * Set the value of numCompteurF
     *
     * @return  self
     */ 
    public function setNumCompteurF($numCompteurF)
    {
        $this->numCompteurF = $numCompteurF;

        return $this;
    }

    /**
     * Get one Customer has One Cart.
     */ 
    public function getNumFactureF()
    {
        return $this->numFactureF;
    }

    /**
     * Set one Customer has One Cart.
     *
     * @return  self
     */ 
    public function setNumFactureF($numFactureF)
    {
        $this->numFactureF = $numFactureF;

        return $this;
    }
}