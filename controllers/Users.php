<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->instanceModel('User');
    }

    public function index()
    {

        $users = $this->User->getAll();

        $this->render('index', compact('users'));
    }

    public function form()
    {
        $this->render('form');
    }

    public function add()
    {
        if (isset($_POST)) {
            $this->loadFile('userprofil');
            $this->User->add(...$_POST);
            $success = "Utilisateur bien ajouté";
            $this->render('form', compact('success'));
        }

    }

    public function loadFile($file)
    {
        $extension = pathinfo($_FILES["$file"]['name'])['extension'];
        $filename = time();
        $_POST[$file] = $filename . '.' . $extension;
        $folder = 'images/';
        move_uploaded_file($_FILES["$file"]['tmp_name'], $folder . $filename . '.' . $extension);
    }

    public function show($id)
    {
        $user = $this->User->getById($id);
        $this->render('show', compact('user'));
    }

    public function delete($id)
    {
        $user = $this->User->del($id);
        $success = "Utilisateur bien supprimé";
        $this->render('form', compact('success'));

    }



}