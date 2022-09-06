<?php

 abstract class Model
{
    //Infos de la base
    private $cd = "mysql:host=localhost;dbname=Esinter";
    private $username = "root";
    private $password = "";

    protected $_connexion;

    public function get_connection()
    {
        try {
            $this->_connexion = null;
            $this->_connexion = new PDO($this->cd, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $e) {
            echo 'ERREUR : ' . $e->getMessage();
        }
    }
}