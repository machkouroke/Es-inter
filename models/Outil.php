<?php


class Outil extends Model
{

    public function __construct(){
        $this->get_connection();
    }
    public function getAll(){
        $sql = "SELECT * FROM Outils";
        $res = $this->_connexion->query($sql);
        return $res->fetchAll();
    }

    public function getById($id){
        $sql = "SELECT * FROM Outils WHERE idoutil='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res->fetch();
    }

    public function add(string ...$data){
        $sql = "INSERT INTO Outils(idoutil,NumSerie,Nom,Caracteristiques,Nombre,DateAj) values(NULL,?,?,?,?,NULL) ";
        $statement = $this->_connexion->prepare($sql);
        $userdata =[$data['NumSerie'],$data['Nom'],$data['Caractéristiques'],$data['Nombre']];
        $statement->execute($userdata);
    }

    public function del($id){
        $sql ="DELETE FROM Outils where idoutil='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res;

    }

}