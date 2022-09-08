<?php
    /* TODO:
           Créer une classe hydraté c'est à dire basé sur le model de la base de données ce genre de code n'est pas
            très maintenable. Tu peux te baser sur la table User que j'ai deja fait  */
    use config\DatabaseConnector;

    class Site extends DatabaseConnector
{

    public function __construct(){
        $this->get_connection();
    }
    public static function getAll(){
        $sql = "SELECT * FROM Sites";
        $res = $this->_connexion->query($sql);
        return $res->fetchAll();
    }

    public static function getById($id){
        $sql = "SELECT * FROM Sites WHERE NumCom='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res->fetch();
    }

    public function add(string ...$data){
        $sql = "INSERT INTO Sites(NumCom, NomClient, Adresse, DateCom, Infosup) values(NULL,?,?,NULL,?)";
        $statement = $this->_connexion->prepare($sql);
        $userdata =[$data['cli'],$data['adresse'],$data['info']];
        $statement->execute($userdata);
    }

    public function del($id){
        $sql ="DELETE FROM Sites where NumCom='".$id."'";
        $res = $this->_connexion->query($sql);
        return $res;

    }

}