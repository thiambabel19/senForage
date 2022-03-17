<?php

    namespace libs\system;

    class Model{

        protected $entityManager;

        public function __construct()
        {
            require_once "C:/xampp/htdocs/L3GL/senForage/bootstrap.php";
            $this->entityManager = $entityManager;
        }


        /**
         * Get the value of entityManager
         */ 
        public function getEntityManager()
        {
            return $this->entityManager;
        }

        /**
         * Set the value of entityManager
         *
         * @return  self
         */ 
        public function setEntityManager($entityManager)
        {
                $this->entityManager = $entityManager;

                return $this;
        }
    }

?>
