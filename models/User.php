<?php

class User extends Model
{

    public function __construct(){
//        $this->table = "etudiants";
        $this->get_connection();
    }
    public function getAll(){
        $sql = "SELECT * FROM users";
        $res = $this->_connexion->query($sql);
        return $res->fetchAll();
    }
}