<?php

namespace models;

use controllers\Sites;
use view\sites\index;

class Site extends Model
{

    public function __construct(){
        $this->get_connection();
    }
    public function getAll(){
        $sql = "SELECT * FROM SitesInterv";
        $res = $this->_connexion->query($sql);
        return $res->fetchAll();
    }

    public function getById($id){
        $sql = "SELECT * FROM SitesInterv WHERE NumCom='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res->fetch();
    }

    public function add(string ...$data){
        $sql = "INSERT INTO SitesInterv(NumCom, NomClient, Adresse, DateCom, Infosup) values(NULL,?,?,NULL,?)";
        $statement = $this->_connexion->prepare($sql);
        $userdata =[$data['cli'],$data['adresse'],$data['info']];
        $statement->execute($userdata);
    }

    public function del($id){
        $sql ="DELETE FROM SitesInterv where NumCom='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res;

    }

}