<?php
    //namespace src\controller;
    use libs\system\Controller;
    use src\model\CompteurDb;

    class CompteurController extends Controller{

        private $compteurDb;

        public function __construct(){
            parent::__construct();
            $this->compteurDb = new CompteurDb();
        }

        /**
         * http://localhost/L3GL/senForage/Compteur/attributionCompteur
         */
        public function attributionCompteur(){
            extract($_POST);
            // echo "$iduser<br>";
            // echo "$idabon<br>";
            // echo "$numcompteur<br>";
            $attribution = new Attribution();
            //$attribution->setDateAttribution(new DateTime());
            $attribution->setIdUserF($this->compteurDb->getEntityManager()->find('User', $iduser));
            $attribution->setIdAbonF($this->compteurDb->getEntityManager()->find('Abonnement', $idabon));
            $attribution->setNumCompteurF($this->compteurDb->getEntityManager()->find('Compteur', $numcompteur));
            $this->compteurDb->getEntityManager()->persist($attribution);
            $this->compteurDb->getEntityManager()->flush();

            //Mise à jour de la table compteur
            $compteur = new Compteur();
            $compteur->setIdAttributionF($this->compteurDb->updateCompteur($attribution->getIdAttribution(), $numcompteur));
            $this->compteurDb->getEntityManager()->flush();

            // //Mise à jour de la table abonnement
            $abon = new Abonnement();
            $abon->setIdAttributionF($this->compteurDb->updateAbonnement($attribution->getIdAttribution(), $idabon));
            $this->compteurDb->getEntityManager()->flush();
            $this->gescompteurHome();
            //echo "coolll";
        }


        /**
         * http://localhost/L3GL/senForage/Compteur/addCompteur
         */
        public function addCompteur(){
            extract($_POST);
            // echo $iduser.'<br>';
            // echo $relever;
            $compteur = new Compteur();
            $compteur->setRelever($relever);
            $compteur->setIdUserF($this->compteurDb->getEntityManager()->find('User', $iduser));
            $this->compteurDb->getEntityManager()->persist($compteur);
            $this->compteurDb->getEntityManager()->flush();
            $this->gescompteurHome();
        }

        /**
         * http://localhost/L3GL/senForage/Compteur/gescompteurHome
         */
        public function gescompteurHome(){
            session_start();
            $iduser = $_SESSION['user']->getIdUser();
            $newAbons = $this->compteurDb->getNewAbon();
            $AtCompteur = $this->compteurDb->CompteurClient();
            $data = array($newAbons, $AtCompteur, $iduser);
            return $this->view->load("gesCompteur/accueil", $data);
        }
    }

?>