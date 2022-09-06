<?php

define("ROOT",str_replace('route.php','',$_SERVER['SCRIPT_FILENAME']));
const CSS_URL = ROOT . 'views/css/';
define("IMG_URL",ROOT.'images/');
//    echo ROOT;
require_once (ROOT."core/Model.php");
require_once (ROOT."core/Controller.php");

//separer les parametres
if(isset($_GET["p"])){
    if((string)$_GET["p"]!="local") {

        $params = explode(".", (string)$_GET["p"]);

        //verifier si un parametre existe
        if ($params[0] != "") {
            $controller = ucfirst($params[0]);
            $action = isset($params[1]) ? $params[1] : 'index';

            require_once(ROOT . 'controllers/' . $controller . '.php');
            $controller = new $controller;
            if (method_exists($controller, $action)) {
                unset($params[0]);
                unset($params[1]);
                call_user_func_array([$controller, $action], $params);
                //$controller->$action();
            } else {
                http_response_code(404);
                echo "Methode inexistante";
            }
        }
    }
    else require_once (ROOT . "views/dash.php");
}

else require_once(ROOT . "views/accueil/log.php");



?>