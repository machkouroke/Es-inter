<?php

include ROOT."models/User.php";

class Dashboard extends Controller
{
    public function index(){
        $this->instanceModel('User');
        $nbusers = count($this->User->getAll());
        $this->render('dash',compact('nbusers'));
    }
}