<?php

/**
 * ARCHIVO INDEX
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-05-01
 */
#mostrar errores
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();

require 'config.php';
require 'util/Auth.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    require LIBS . $class . ".php";
}

Session::init();

// Load the Bootstrap!
$bootstrap = new Bootstrap();

// Optional Path Settings
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();

$bootstrap->init();

//cargarmos el helper
require 'util/Helper.php';
#inicializamos el helper
$helper = new Helper();

ob_end_flush();