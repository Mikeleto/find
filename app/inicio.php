<?php
ini_set('display_errors', 1);
require_once "libs/MySQLdb.php";
/**
 * La clase aplication maneja la url y lanza los procesos
 */


class Application
{
    public function __construct()
    {
         $url = $this->separarURL();
    }

    public function separarUrl(){

        if($_SERVER['REQUEST_URI'] != '/'){
            $url = trim($_SERVER['REQUEST_URI'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
        }

    }
}