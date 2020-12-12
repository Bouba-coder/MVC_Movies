<?php

class Router{
    private $_ctrl;
    private $_view;

    //function to autoload class
    public function routeReq(){
        try{
            spl_autoload_register(function($class){
               require_once('model/'.$class.'php');
            });
            //getting the url for explode
            $url="";
            if(isset($_GET['url']){

                //get the good controller file
                $url = explode('/', FILTER_VAR($_GET['url'], FILTER_SANITIZE_URL));
                $controller = ucfirst(strtolowor($url[0]));
                $controllerClass = 'Controller'.$controller;
                $controllerFile = 'controllers/'.$controllerClass.'php';

                //verification
                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }
                else throw now Exception('Page introuvable');
            }else{
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil($url);
            }

        }
        //return error msg(err gestion)
        catch(Exception $e){
              $errorMsg = $e->getMessage();
              require_once('view/viewError.php');

        }


    }




}