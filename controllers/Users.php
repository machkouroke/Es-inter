<?php

class Users extends Controller
{
    public function index(){
        $this->instanceModel('User');
        $users = $this->User->getAll();

        $this->render('users',compact('users'));
    }
}