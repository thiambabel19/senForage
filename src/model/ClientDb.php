<?php

    namespace src\model;
    use libs\system\Model;

    class ClientDb extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        // //liste des roles
        // public function getRoles(){
        //     return $this->entityManager->getRepository('Role')->findAll();
        // }

        //liste des clients
        public function getClients(){
            return $this->entityManager->getRepository('Client')->findAll();
        }

        //liste des villages
        public function getVillages(){
            return $this->entityManager->getRepository('Village')->findAll();
        }

        //liste des abonnements
        public function getAbonnements(){
            return $this->entityManager->getRepository('Abonnement')->findAll();
        }

        
        
    }

?>