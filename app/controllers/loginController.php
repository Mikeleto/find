<?php

class loginController extends Controller{

    private $model;
    public function __construct(){
    $this->model = $this->model('login');
    }

    public function index(){
        $data = [
            'title' => 'Login',
            'menu' => 'false',
        ];
        $this->view('login',$data);
    }

    public function registro(){
        $data = [
            'title' => 'Registro',
            'menu' => 'false',
        ];
        $this->view('register',$data);
    }
}