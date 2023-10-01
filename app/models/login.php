<?php

class login{
private $db;
public function __construct(){

    $this->db = MySQL::getInstance()->getDatabase();
}
}