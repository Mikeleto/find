<?php
ini_set('display_errors', 1);
require_once "libs/MySQLdb.php"
/**
 * La clase aplication maneja la url y lanza los procesos
 */

 class Application{
    function __construct(){
        $db = MySQLdb::getInstance()->getDatabase();
        print "Conexión establecida";
    }
 }