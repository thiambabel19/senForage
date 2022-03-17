<?php
    //namespace src\controller;
    use libs\system\Controller;
    use src\model\ConsommationDb;

    class ConsoController extends Controller{

        private $consommationDb;

        public function __construct(){
            parent::__construct();
            $this->consomationDb = new ConsommationDb();
        }

        /**
         * http://localhost/L3GL/senForage/Conso/saveConsommation
         */
        public function saveConsommation(){
            extract($_POST);
            //echo "$iduser<br>$periode<br>$numcompteur<br>$cumule<br>$qte";
            $conso = new Consommation();
            $conso->setIdUserF($this->consomationDb->getEntityManager()->find('User', $iduser));
            $conso->setPeriode($periode);
            $conso->setNumCompteurF($this->consomationDb->getEntityManager()->find('Compteur', $numcompteur));
            $conso->setCumule($cumule);
            $conso->setQte($qte);
            $this->consomationDb->getEntityManager()->persist($conso);
            $this->consomationDb->getEntityManager()->flush();
            
            //Mise à jour du relevé
            $compteur = new Compteur();
            $compteur->setRelever($this->consomationDb->updateRelever($numcompteur));

            $this->formAddConso();
        }

        /**
         * http://localhost/L3GL/senForage/Conso/formAddConso
         */
        public function formAddConso(){
            session_start();
            $compteur = $this->consomationDb->CompteurAttribues();
            $iduser = $_SESSION['user']->getIdUser();
            $data = array($compteur, $iduser);
            return $this->view->load("gesCommercial/accueil", $data);
        }

    }


?>