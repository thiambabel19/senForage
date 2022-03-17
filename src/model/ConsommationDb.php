<?php

    namespace src\model;
    use libs\system\Model;

    class ConsommationDb extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        //Mise à jour du relever relever du compteur
        public function updateRelever($numcompteur){
            $relever = random_int(15, 50);
            return $this->entityManager->createQuery(
                "UPDATE Compteur c SET c.relever = $relever WHERE c.numCompteur = $numcompteur"
            )->execute();
        }

        //liste des compteurs attribués
        public function CompteurAttribues(){
            return $this->entityManager->getRepository('Attribution')->findAll();
        }
    }

?>