<?php
namespace controllers\enum;
use views\accueil\log;
use views\dash;
use views\Esputilisateur\index;


/**
 * Enumeration sur la fonction des utilisateurs
 */
enum Role: String
{
    case Admin = 'admin';
    case Employe = 'employe';

}