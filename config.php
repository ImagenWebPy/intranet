<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-05-01
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case 'chrysler.com.py':
        define('URL', 'http://chrysler.com.py/institucional/');
        define('DB_USER', 'web');
        define('DB_PASS', 'WebG@rdenMKT');
        define('DB_NAME', 'intranet');
        break;
    case 'www.garden.com.py':
        define('URL', 'http://www.garden.com.py/institucional/');
        define('DB_USER', 'web');
        define('DB_PASS', 'WebG@rdenMKT');
        define('DB_NAME', 'intranet');
        break;
    case '192.168.0.25':
        define('URL', 'http://192.168.0.25/institucional/');
        define('DB_USER', 'root');
        define('DB_PASS', '2544386');
        define('DB_NAME', 'intranet');
        break;
    case 'localhost':
        define('URL', 'http://localhost/institucional/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'intranet');
        break;
    default :
        define('URL', 'http://192.168.90.195/institucional/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'intranet');
        break;
}
define('LIBS', 'libs/');
/*
 * DESARROLLO
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');

// Salt utilizado para el hash de la BD
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

// Constantes varias
define('SITE_TITLE', 'Garden Institucional :: ');
define('TITLE_ADMIN', 'Institucional Admin :: ');
define('ARCHIVOS', URL . 'public/archivos/');
define('CANT_REG_PAGINA', 20);
define('PASS_REGENERAR', 'garden2017');

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
