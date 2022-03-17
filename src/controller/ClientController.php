<?php
    //namespace src\controller;
    use libs\system\Controller;
    use src\model\ClientDb;

    class ClientController extends Controller{

        private $clientDb;

        public function __construct(){
            parent::__construct();
            $this->clientDb = new ClientDb();
        }

        /**
         * http://localhost/L3GL/senForage/Client/gesclientHome
         */
        public function gesclientHome(){
            $listeclients = $this->clientDb->getClients();
            return $this->view->load("gesClientele/accueil", $listeclients);
        }

        /**
         * http://localhost/L3GL/senForage/Client/addClient
         */
        public function addClient(){
            session_start();
            extract($_POST);
            //echo 'ok';
            $client = new Client();
            $client->setNomClient($nom);
            $client->setAdresseClient($adresse);
            $client->setTelClient($tel);
            $client->setIdVillageF($this->clientDb->getEntityManager()->find('Village',$village));
            $client->setIdUserF($this->clientDb->getEntityManager()->find('User',$iduser));
            $this->clientDb->getEntityManager()->persist($client);
            $this->clientDb->getEntityManager()->flush();
            $clients = $this->clientDb->getClients();
            $this->view->load("gesclientele/accueil", $clients);
        }

        /**
         * http://localhost/L3GL/senForage/Client/listeVillages
         */
        public function listeVillages(){
            $villages = $this->clientDb->getVillages();
            return $this->view->load("gesClientele/listeVillage", $villages);
        }

        /**
         * http://localhost/L3GL/senForage/Client/addVillage
         */
        public function addVillage(){
            extract($_POST);
            $village = new Village();
            $village->setNomVillage($nomVillage);
            $village->setChefVillage($chef);
            $village->setIdUserF($this->clientDb->getEntityManager()->find('User',$iduser));
            $this->clientDb->getEntityManager()->persist($village);
            $this->clientDb->getEntityManager()->flush();
            $this->gesclientHome();
        }

        /**
         * http://localhost/L3GL/senForage/Client/listeAbon
         */
        public function listeAbon(){
            $abons = $this->clientDb->getAbonnements();
            return $this->view->load("gesClientele/listeAbon", $abons);
        }

        /**
         * http://localhost/L3GL/senForage/Client/addAbon
         */
        public function addAbon(){
            extract($_POST);
            //echo "$date<br>$description<br>$iduser<br>$client";
            $abon =  new Abonnement();
            $abon->setDateAbon($date);
            $abon->setDescription($description);
            $abon->setIdUserF($this->clientDb->getEntityManager()->find('User', $iduser));
            $abon->setIdClientF($this->clientDb->getEntityManager()->find('Client', $client));
            $this->clientDb->getEntityManager()->persist($abon);
            $this->clientDb->getEntityManager()->flush();
            return $this->listeAbon();
        }


    }


?>