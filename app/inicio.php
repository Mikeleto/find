<?php
ini_set('display_errors', 1);

define('ROOT', DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . ROOT);
define('ENCRIPTKEY', 'elperrodesanroque');
define('URL', '/var/www/tiendamvc');
define('VIEWS', URL . APP . 'views' . ROOT);

require_once "libs/MySQLdb.php";
require_once "libs/Application.php";
require_once "libs/Controller.php";
require_once 'libs/Session.php';

