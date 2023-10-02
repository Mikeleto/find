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
}