<?php
    class Autoloader
    {
        static function register()
        {
            spl_autoload_register(array(__CLASS__, "autoload"));
        }
        static function autoload($class)
        {
            //echo str_replace("\\","/",$class);
            if(file_exists("src/model/".$class.".php"))
                require_once "src/model/".$class.".php";

            else if(file_exists("src/controller/".$class.".php"))
                //echo $class;
                require_once "src/controller/".$class.".php";

            //nameespace

            else if(file_exists(str_replace("\\","/",$class.".php"))){
                require_once str_replace("\\","/",$class.".php");
            }
            // else{
            //     //echo $class;
            //     die("Merci d'utiliser le mot clé USE");
            // }
        }
    }
    Autoloader::register();
?>