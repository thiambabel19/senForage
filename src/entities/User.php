<?php
// namespace src\Entities;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="user")
 */
class User {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idUser;
    /**
    * @ORM\Column(type="string", length="50")
    */
    private $nomUser;
    /**
     * @ORM\Column(type="string", length="50")
    */
    private $prenomUser;
    /**
     * @ORM\Column(type="string", length="80")
    */
    private $emailUser;
    /**
     * @ORM\Column(type="string")
    */
    private $mdpUser;

    /**
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumn(name="id_role", referencedColumnName="idRole")
     */
    private $idRoleF;

    public function __construct () {

    }
    

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of nomUser
     */ 
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set the value of nomUser
     *
     * @return  self
     */ 
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get the value of prenomUser
     */ 
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set the value of prenomUser
     *
     * @return  self
     */ 
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get the value of emailUser
     */ 
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set the value of emailUser
     *
     * @return  self
     */ 
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get the value of mdpUser
     */ 
    public function getMdpUser()
    {
        return $this->mdpUser;
    }

    /**
     * Set the value of mdpUser
     *
     * @return  self
     */ 
    public function setMdpUser($mdpUser)
    {
        $this->mdpUser = $mdpUser;

        return $this;
    }

    /**
     * Get the value of idRoleF
     */ 
    public function getIdRoleF()
    {
        return $this->idRoleF;
    }

    /**
     * Set the value of idRoleF
     *
     * @return  self
     */ 
    public function setIdRoleF($idRoleF)
    {
        $this->idRoleF = $idRoleF;

        return $this;
    }
}