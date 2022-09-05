<?php

/**



/**
 * Constante de répertoire d'url
 */
const BASE_URL = "";
const VIEW_URL = BASE_URL . "/view/";

const INDEX_LOCATION = "Location:index.php";




/**
 * fonction permettant d'afficher des logs sur la console
 * @param $message
 * @return void
 */
function logging($message): void
{
    if (gettype($message) == 'array' || gettype($message) == 'object') {
        echo "<script>console.log('" . json_encode($message) . "')</script>";
    } else {
        echo "<script>console.log('" . $message . "')</script>";
    }
}

/**
 * Constante de role
 */


if (isset($_SESSION['User'])) {
    define("ADMIN_ONLY", $_SESSION['User']->getRole() === Role::Admin);
    define("EMPLOYE_ONLY", $_SESSION['User']->getRole() === Role::Employe);



}


