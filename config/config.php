<?php


define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}



define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


define('DB_TYPE', 'mysql');//tipo de db
define('DB_HOST', 'localhost');//localhost o servidor
define('DB_NAME', 'juegos');
define('DB_USER', 'root');//usuario root
define('DB_PASS', '');//contraseña
define('DB_CHARSET', 'utf8');//caracteres especiales del idioma español
