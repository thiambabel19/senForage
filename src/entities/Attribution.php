<?php
// namespace src\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="attribution")
 */
class Attribution {
     /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idAttribution;
    /**
     * Many Attributions have one Compteur.
     * @ORM\ManyToOne(targetEntity="Compteur")
     * @ORM\JoinColumn(name="numero_compteur", referencedColumnName="numCompteur")
     */
    private $numCompteurF;
    /**
     * Many Attributions have one Abonnement
     * @ORM\ManyToOne(targetEntity="Abonnement")
     * @ORM\JoinColumn(name="id_abonnement", referencedColumnName="idAbon")
     */
    private $idAbonF;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * @ORM\Column(type="date")
    */
    private $dateAttribution;

    public function __construct()
    {
        $this->dateAttribution = new \DateTime();
    }
    

    /**
     * Get the value of idAttribution
     */ 
    public function getIdAttribution()
    {
        return $this->idAttribution;
    }

    /**
     * Set the value of idAttribution
     *
     * @return  self
     */ 
    public function setIdAttribution($idAttribution)
    {
        $this->idAttribution = $idAttribution;

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
     * Get the value of dateAttribution
     */ 
    public function getDateAttribution()
    {
        return $this->dateAttribution;
    }

    /**
     * Set the value of dateAttribution
     *
     * @return  self
     */ 
    public function setDateAttribution($dateAttribution)
    {
        $this->dateAttribution = $dateAttribution;

        return $this;
    }

    /**
     * Get many Attributions have one Compteur.
     */ 
    public function getNumCompteurF()
    {
        return $this->numCompteurF;
    }

    /**
     * Set many Attributions have one Compteur.
     *
     * @return  self
     */ 
    public function setNumCompteurF($numCompteurF)
    {
        $this->numCompteurF = $numCompteurF;

        return $this;
    }

    /**
     * Get many Attributions have one Abonnement
     */ 
    public function getIdAbonF()
    {
        return $this->idAbonF;
    }

    /**
     * Set many Attributions have one Abonnement
     *
     * @return  self
     */ 
    public function setIdAbonF($idAbonF)
    {
        $this->idAbonF = $idAbonF;

        return $this;
    }

    public function convertDate($dateFromDB){
        $newDate = DateTime::createFromFormat("l dS F Y", $dateFromDB);
        $newDate = $newDate->format('d/m/Y');
        return $newDate;
    }

}