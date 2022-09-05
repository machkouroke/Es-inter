<?php

namespace controllers;

use views\accueil\log;
use views\dash;
use views\Esputilisateur\index;
use models\Accueil;

/**
* ouvre la page de l'utilisateur
*/
public static function userPage(): void
{

    $userPage = function () {

        if (isset($_GET['userLogin'])) {
            $user = User::getByLogin($_GET['userLogin']);
            if ($user->getRole() == Role::Admin) {
                $user = Admin::getByLogin($_GET['userLogin']);
            } else if ($user->getRole() == Role::Employe) {
                $user = Employe::getByLogin($_GET['userLogin']);
            }
        } else {
            $user = $_SESSION['User'];
        }


        require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'views/accueil/log.php');
    };
}
