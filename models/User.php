<?php

namespace models;

use controllers\Users;
use view\users\index;

class User extends Model
{

    public function __construct(){
        $this->get_connection();
        $this->role = Role::FROM($user['role']);
    }


    public function getAll(){
        $sql = "SELECT * FROM Utilisateurs";
        $res = $this->_connexion->query($sql);
        return $res->fetchAll();
    }

    public function getById($id){
        $sql = "SELECT * FROM Utilisateurs WHERE Iduser='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res->fetch();
    }

    public function add(string ...$data){
        $sql = "INSERT INTO Utilisateurs(Iduser,Nom,Prenom, Poste, Photo, Contact, Email) values(NULL,?,?,?,?,?,?) ";
        $statement = $this->_connexion->prepare($sql);
        $userdata =[$data['name'],$data['surname'],$data['post'],$data['userprofil'],$data['tel'],$data['email']];
        $statement->execute($userdata);
    }

    public function del($id){
        $sql ="DELETE FROM Utilisateurs where Iduser='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res;

    }

    public static function getByLogin(string $role): User|bool
    {
        $con = FACTORY->get_connexion();
        $sql = "select * from Utilisateurs where Role='" . $role . "'";
        if ($res = ($con->query($sql))->fetch(PDO::FETCH_ASSOC)) {
            return new User(...$res);
        }
        return false;

    }
}