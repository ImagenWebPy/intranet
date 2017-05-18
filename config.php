<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-05-01
 */

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://localhost/intranet/');
define('LIBS', 'libs/');

/*
 * DESARROLLO
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'intranet');
define('DB_USER', 'root');
define('DB_PASS', '');

// Salt utilizado para el hash de la BD
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

// Constantes varias
define('SITE_TITLE', 'Sistema LHC :: ');
define('IMAGES', URL . 'public/images/');
define('CANT_REG_PAGINA', 20);
