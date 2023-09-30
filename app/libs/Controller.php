<?php

class Controller{

public function model($model){
include_once '../app/models'.$model.'.php';
return new model();
}

public function views($view,$data = []){
    if(file_exists('../app/views'.$view.'.php')){
include_once '../app/views'.$view.'.php';
    }else{
        die('La vista no existe');
    }

}

}