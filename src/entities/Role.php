<?php
// namespace src\Entities;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="role")
 */
class Role {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    private $idRole;
    /**
     * @ORM\Column(type="string",length=30)
    */
    private $nomRole;
    
    public function __construct () {

    }
    

    /**
     * Get the value of idRole
     */ 
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get the value of nomRole
     */ 
    public function getNomRole()
    {
        return $this->nomRole;
    }

    /**
     * Set the value of nomRole
     *
     * @return  self
     */ 
    public function setNomRole($nomRole)
    {
        $this->nomRole = $nomRole;

        return $this;
    }
}