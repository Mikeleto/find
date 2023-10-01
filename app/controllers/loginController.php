<?php

class loginController{

    private $model;
    public function __construct(){
    $this->model = $this->model('login');
    }

    public function index(){
        $data = [];
        $this->view('login',$data);
    }
}