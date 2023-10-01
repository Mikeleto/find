<?php

class login{
private $db;
public function __construct(){

    $this->db = MySQLdb::getInstance()->getDatabase();
}
}