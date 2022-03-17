<?php

    namespace src\model;
    use libs\system\Model;

    class CompteurDb extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        //liste des nouveaux abonnés
        public function getNewAbon(){
            return $this->entityManager->getRepository('Abonnement')->findBy(array('idAttributionF' => null));
        }

        //liste des compteurs non attribués
        public function CompteurClient(){
            return $this->entityManager->getRepository('Compteur')->findBy(array('idAttributionF' => null));
        }

        //Mise à jour idAttributionF de la table compteur
        public function updateCompteur($idAttributionF, $numCompteur){
            return $this->entityManager->createQuery(
                "UPDATE Compteur c SET c.idAttributionF = $idAttributionF WHERE c.numCompteur = $numCompteur"
            )->execute();
                    
        }

        //Mise à jour idAttributionF de la table Abonnement
        public function updateAbonnement($idAttributionF, $idAbon){
            return $this->entityManager->createQuery(
                "UPDATE Abonnement a SET a.idAttributionF = $idAttributionF WHERE a.idAbon = $idAbon"
            )->execute();
        }

    }

?>