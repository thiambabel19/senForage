<?php
    //namespace src\controller;
    use libs\system\Controller;
    use src\model\UserDb;

    class UserController extends Controller{

        private $userDb;

        public function __construct(){
            parent::__construct();
            $this->userDb = new UserDb();
        }

        /**
         * http://localhost/L3GL/senForage/
         */
        public function login(){
            return $this->view->load("login");
        }

        /**
         * http://localhost/L3GL/senForage/User/formChangerMDp
         */
        public function formChangerMDp($iduser){
            $data = $iduser;
            return $this->view->load("modifierMdp", $data);
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddCompteur
         */
        public function formAddCompteur(){
            session_start();
            $iduser = $_SESSION['user']->getIdUser();
            return $this->view->load("gesCompteur/addCompteur", $iduser);
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddConso
         */
        public function formAddConso(){
            session_start();
            $compteur = $this->userDb->CompteurAttribues();
            $iduser = $_SESSION['user']->getIdUser();
            $data = array($compteur, $iduser);
            return $this->view->load("gesCommercial/accueil", $data);
        }

        /**
         * http://localhost/L3GL/senForage/User/changerMdp
         */
        public function changerMdp(){

            extract($_POST);
           
            if($mdp1 == $mdp2){
                session_start();
                $users = $this->userDb->updateMdp($userId);
                if(count($users) != 0){
                    $user = $users[0];
                    $user->setMdpUser($mdp1);
                    $this->userDb->getEntityManager()->flush();
                    session_destroy();
                    return $this->view->load("login");
                }

            }else{
                    echo "<h2>Erreur lors de la confirmation du mot de passe</h2>.";
                } 
            
        }

        /**
         * http://localhost/L3GL/senForage/User/adminHome
         */
        public function adminHome(){
            $listeUser = $this->userDb->getUsers();
            return $this->view->load("admin/accueil", $listeUser);
        }

        /**
         * http://localhost/L3GL/senForage/User/gesclientHome
         */
        public function gesclientHome(){
            $listeclients = $this->userDb->getClients();
            return $this->view->load("gesClientele/accueil", $listeclients);
        }

        /**
         * http://localhost/L3GL/senForage/User/gescompteurHome
         */
        public function gescompteurHome(){
            //session_start();
            $iduser = $_SESSION['user']->getIdUser();
            $newAbons = $this->userDb->getNewAbon();
            $AtCompteur = $this->userDb->CompteurClient();
            $data = array($newAbons, $AtCompteur, $iduser);
            return $this->view->load("gesCompteur/accueil", $data);
        }

        /**
         * http://localhost/L3GL/senForage/User/gescommercialeHome
         */
        public function gescommercialeHome(){
            $this->formAddConso();
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddUser
         */
        public function formAddUser(){
            $roles = $this->userDb->getRoles();
            return $this->view->load("admin/addUser", $roles);
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddClient
         */
        public function formAddClient(){
            session_start();
            $villages = $this->userDb->getVillages();
            $data = array($_SESSION['user'], $villages);
            return $this->view->load("gesClientele/addClient", $data);
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddVillage
         */
        public function formAddVillage(){
            session_start();
            $iduser = $_SESSION['user']->getIdUser();
            return $this->view->load("gesClientele/addVillage", $iduser);
        }

        /**
         * http://localhost/L3GL/senForage/User/formAddAbon
         */
        public function formAddAbon(){
            session_start();
            $clients = $this->userDb->getClients();
            $iduser = $_SESSION['user']->getIdUser();
            $data = array($iduser, $clients);
            return $this->view->load("gesClientele/addAbon", $data);
        }

        /**
         * http://localhost/L3GL/senForage/User/addUser
         */
        public function addUser(){
            extract($_POST);
            //echo 'ok';
            $user = new User();
            $user->setPrenomUser($prenom);
            $user->setNomUser($nom);
            $user->setEmailUser($email);
            $user->setMdpUser($mdp);
            $user->setIdRoleF($this->userDb->getEntityManager()->find('Role',$role));
            $this->userDb->getEntityManager()->persist($user);
            $this->userDb->getEntityManager()->flush();
            $this->adminHome();

        }

        /**
         * http://localhost/L3GL/senForage/User/logon
         */
        public function logon(){
            extract($_POST);
            
            $users = $this->userDb->userExist($email, $mdp);
                
            if (count($users) != 0) 
            {
                session_start();
                //echo "ok";
                $user = $users[0];
                $_SESSION['user'] = $user;
                
                //changer mdp par defaut
                if($_SESSION['user']->getMdpUser() == "Passer")
                    $this->formChangerMDp($_SESSION['user']->getIdUser());
                
                //redirection au nom du profil
                else{

                    //Admin
                    if($_SESSION['user']->getIdRoleF()->getNomRole() == "ROLE_ADMIN"){
                        return $this->adminHome();
                    }
                    //GesClientèle
                    else if($_SESSION['user']->getIdRoleF()->getNomRole() == "ROLE_GESCLIENTELE"){
                        return $this->gesclientHome();
                    }

                    //GesCompteur
                    else if($_SESSION['user']->getIdRoleF()->getNomRole() == "ROLE_GESCOMPTEUR"){
                        return $this->gescompteurHome();
                    }

                    //GesCommerciale
                    else if($_SESSION['user']->getIdRoleF()->getNomRole() == "ROLE_GESCOMMERCIALE"){
                        return $this->gescommercialeHome();
                    }                

                }

            }else{

                //echo "no ok";
                header("Location://localhost/L3GL/senForage/?error=1");
            }
        }

        /**
         * http://localhost/L3GL/senForage/User/logout
         */
        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            return $this->login();
        }
    
    }


?>