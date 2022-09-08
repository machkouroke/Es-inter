<?php

    spl_autoload_register(static function (string $path) {
        $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $path . '.php';
        require_once($path);
    });
    require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config\config.php');
    use controllers\AuthenticationController;

//    //separer les parametres
//    if (isset($_GET["action"])) {
//        if ($_GET["action"] != "local") {
//
//            $params = explode(".", $_GET["action"]);
//            print_r($params);
//
//            //verifier si un parametre existe
//            if ($params[0] != "") {
//                $controller = ucfirst($params[0]);
//                $action = $params[1] ?? 'index';
//
//                require_once(ROOT . 'controllers'. DIRECTORY_SEPARATOR. $controller . '.php');
//                $controller = new $controller;
//                if (method_exists($controller, $action)) {
//                    unset($params[0]);
//                    unset($params[1]);
//                    call_user_func_array([$controller, $action], $params);
//                } else {
//                    http_response_code(404);
//                    echo "Methode inexistante";
//                }
//            }
//        }
//
//    } else {
//        require_once(ROOT . "views/accueil/log.php");
//    }
    session_start();
    if (isset($_SESSION['User'])) {
        print('Connected');
//        if (isset($_GET['action'])) {
//            switch ($_GET['action']) {
//                case 'addStudentPage':
//                    MenuController::addStudent();
//                    break;
//
//                default:
//                    MenuController::menu();
//            }
//
//        } else {
//            MenuController::menu();
//        }
    } else {

        if (isset($_GET['action']) && $_GET['action'] == 'login') {
            AuthenticationController::login();

        } else {
            AuthenticationController::loginPage();
        }

    }


