<?php
require_once "libs/MySQLdb.php"
/**
 * La clase aplication maneja la url y lanza los procesos
 */

 class Application{
    function __construct(){
        $db = MySQLdb::getInstance()->getDatabase();
    }
 }