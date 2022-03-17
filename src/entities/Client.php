<?php
// namespace src\Entities;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity 
 * @ORM\Table(name="client")
 */
class Client {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idClient;
    /**
     * @ORM\Column(type="string")
    */
    private $nomClient;
    /**
     * @ORM\Column(type="string")
    */
    private $adresseClient;
    /**
     * @ORM\Column(type="string")
    */
    private $telClient;

    /**
     * Many Clients have one Village
     * @ORM\ManyToOne(targetEntity="Village")
     * @ORM\JoinColumn(name="id_village", referencedColumnName="idVillage")
     */
    private $idVillageF;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="idUser")
     */
    private $idUserF;
    /**
     * One Client has many abonnements. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="idClientF")
     */
    private $idAbonF;

    public function __construct () {
        $this->idAbonF = new ArrayCollection ();
    }

    

    /**
     * Get the value of idClient
     */ 
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set the value of idClient
     *
     * @return  self
     */ 
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get the value of nomClient
     */ 
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set the value of nomClient
     *
     * @return  self
     */ 
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get the value of adresseClient
     */ 
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set the value of adresseClient
     *
     * @return  self
     */ 
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    /**
     * Get the value of telClient
     */ 
    public function getTelClient()
    {
        return $this->telClient;
    }

    /**
     * Set the value of telClient
     *
     * @return  self
     */ 
    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;

        return $this;
    }

    /**
     * Get many Clients have one Village
     */ 
    public function getIdVillageF()
    {
        return $this->idVillageF;
    }

    /**
     * Set many Clients have one Village
     *
     * @return  self
     */ 
    public function setIdVillageF($idVillageF)
    {
        $this->idVillageF = $idVillageF;

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
     * Get one Client has many abonnements. This is the inverse side.
     */ 
    public function getIdAbonF()
    {
        return $this->idAbonF;
    }

    /**
     * Set one Client has many abonnements. This is the inverse side.
     *
     * @return  self
     */ 
    public function setIdAbonF($idAbonF)
    {
        $this->idAbonF = $idAbonF;

        return $this;
    }

    /**
     * Get one chef has One village.
     */ 
    public function getChefVillageF()
    {
        return $this->chefVillageF;
    }

    /**
     * Set one chef has One village.
     *
     * @return  self
     */ 
    public function setChefVillageF($chefVillageF)
    {
        $this->chefVillageF = $chefVillageF;

        return $this;
    }
}