<?php
// namespace src\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="abonnement")
 */
class Abonnement {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idAbon;
    /**
     * @ORM\Column(type="date")
    */
    private $dateAbon;
    /**
     * @ORM\Column(type="text")
    */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * Many abonnement have one Client. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="idAbon")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="idClient")
     */
    private $idClientF;
    /**
     * One Village has chef.
     * @ORM\OneToOne(targetEntity="Attribution")
     * @ORM\JoinColumn(name="id_attribution", referencedColumnName="idAttribution", nullable=true)
     */
    private $idAttributionF;

    
    public function __construct () {

    }
    

    /**
     * Get the value of idAbon
     */ 
    public function getIdAbon()
    {
        return $this->idAbon;
    }

    /**
     * Set the value of idAbon
     *
     * @return  self
     */ 
    public function setIdAbon($idAbon)
    {
        $this->idAbon = $idAbon;

        return $this;
    }

    /**
     * Get the value of dateAbon
     */ 
    public function getDateAbon()
    {
        return $this->dateAbon;
    }

    /**
     * Set the value of dateAbon
     *
     * @return  self
     */ 
    public function setDateAbon($dateAbon)
    {
        $this->dateAbon = date_create($dateAbon);

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Get many abonnement have one Client. This is the owning side.
     */ 
    public function getIdClientF()
    {
        return $this->idClientF;
    }

    /**
     * Set many abonnement have one Client. This is the owning side.
     *
     * @return  self
     */ 
    public function setIdClientF($idClientF)
    {
        $this->idClientF = $idClientF;

        return $this;
    }

    /**
     * Get one Village has chef.
     */ 
    public function getIdAttributionF()
    {
        return $this->idAttributionF;
    }

    /**
     * Set one Village has chef.
     *
     * @return  self
     */ 
    public function setIdAttributionF($idAttributionF)
    {
        $this->idAttributionF = $idAttributionF;

        return $this;
    }
}