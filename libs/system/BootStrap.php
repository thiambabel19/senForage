<?php
    namespace libs\system;

    use UserController;

    class BootStrap{

        public function __construct()
        {
            if(isset($_GET["url"])){
                //session_start();
                $url = explode("/",$_GET["url"]);
                $controller_file = "src/controller/".$url[0]."Controller.php";
                //echo $url[0]."<br>";
                if(file_exists($controller_file)){
                    //echo $controller_file."<br>";
                    require_once $controller_file;
                    $file = $url[0]."Controller";
                    //echo $file."<br>";
                    $controller_object = new $file();
                    //echo $controller_file;
                    if(isset($url[2])){
                        $method = $url[1];
                        if(method_exists($controller_object, $method)){
                            $controller_object->$method($url[2]);
                        }else{
                            die($method." n'existe pas dans le controller ".$file);
                        }

                    }else if(isset($url[1])){
                        
                        $method = $url[1];
                        if(method_exists($controller_object, $method)){
                            $controller_object->$method();
                        }else{
                            die($method." n'existe pas dans le controller ".$file);
                        }
                        
                    }
                }else{
                    die($controller_file. " n'existe pas .");
                }

            }else{
                $pageLogin = new UserController();
                $pageLogin->login();
            }
        }
    }

?>
