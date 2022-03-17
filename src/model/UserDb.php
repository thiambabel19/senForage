<?php

    namespace src\model;
    use libs\system\Model;

    class UserDb extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        //authentification
        public function userExist($email, $mdp){
            return $this->entityManager->getRepository('User')->findBy(array('emailUser' => $email, 'mdpUser' => $mdp));
        }

        //liste des utilisateurs
        public function getUsers(){
            return $this->entityManager->getRepository('User')->findAll();
        }


        //liste des roles
        public function getRoles(){
            return $this->entityManager->getRepository('Role')->findAll();
        }

        //liste des clients
        public function getClients(){
            return $this->entityManager->getRepository('Client')->findAll();
        }

        //liste des nouveaux abonnés
        public function getNewAbon(){
            return $this->entityManager->getRepository('Abonnement')->findBy(array('idAttributionF' => null));
        }

        //liste des compteurs non attribués
        public function CompteurClient(){
            return $this->entityManager->getRepository('Compteur')->findBy(array('idAttributionF' => null));
        }

        //liste des compteurs attribués
        public function CompteurAttribues(){
            return $this->entityManager->getRepository('Attribution')->findAll();
        }

        //liste des villages
        public function getVillages(){
            return $this->entityManager->getRepository('Village')->findAll();
        }

        //misa àjour du mdp à la premiere connexion de l'utilisateur
        public function updateMdp($id){
            return $this->entityManager->getRepository('User')->findBy(array('idUser' => $id));
        }
        
    }

?>