<?php

namespace controllers;
use models\Outil;
use view\outils\index;

class Outils extends Controller
{
    public function __construct()
    {
        $this->instanceModel('Outil');
    }

    public function index(){

        $outils = $this->Outil->getAll();
        $this->render('index',compact('outils'));
    }

    public function form(){
        $this->render('form');
    }

    public function add(){
        if(isset($_POST)){
            $this->loadFile('Numserie');
            $this->User->add(...$_POST);
            $success = "Outil bien ajouté";
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
        $user = $this->Outil->getById($id);
        $this->render('show',compact('outil'));
    }

    public function delete($id){
        $user = $this->Outil->del($id);
        $success = "Outil bien supprimé";
        $this->render('form',compact('success'));

    }

}