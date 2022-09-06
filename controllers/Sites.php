<?php

class Sites extends Controller
{
    public function __construct()
    {
        $this->instanceModel('Site');
    }

    public function index(){

        $sites = $this->Site->getAll();

        $this->render('index',compact('sites'));
    }

    public function form(){
        $this->render('form');
    }

    public function add(){
        if(isset($_POST)){
            $this->loadFile('cli');
            $this->Site->add(...$_POST);
            $success = "Nouvelle commande ajoutée";
            $this->render('form',compact('success'));
        }

    }

    public function loadFile($file){
        $extension = pathinfo($_FILES["$file"]['name'])['extension'];
        $filename = time();
        $_POST[$file] = $filename.'.'.$extension;
        $folder = 'images/';
        move_uploaded_file($_FILES["$file"]['tmp_name'], $folder.$filename.'.'.$extension);
    }

    public function show($id){
        $site = $this->Site->getById($id);
        $this->render('show',compact('site'));
    }

    public function delete($id){
        $site = $this->Site->del($id);
        $success = "Commande supprimée";
        $this->render('form',compact('success'));

    }

}