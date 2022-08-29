<?php

 abstract class Model
{
    //Infos de la base
    private $cd = "mysql:host=localhost;dbname=esinter";
    private $username = "root";
    private $password = "claudine";

    protected $_connexion;
    //public $id;
    public $table;

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