<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-05-01
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case '192.168.0.25':
        define('URL', 'http://192.168.0.25/intranet/');
        define('DB_USER', 'root');
        define('DB_PASS', '2544386');
        break;
    default :
        define('URL', 'http://localhost/intranet/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        break;
}
define('LIBS', 'libs/');

/*
 * DESARROLLO
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'intranet');


// Salt utilizado para el hash de la BD
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

// Constantes varias
define('SITE_TITLE', 'Garden Intranet :: ');
define('IMAGES', URL . 'public/images/');
define('CANT_REG_PAGINA', 20);

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
