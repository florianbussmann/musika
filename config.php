<?php

define ('BASEDIR', __DIR__);
include(BASEDIR .'/../db_config.inc.php');

// set some php.ini-values (if possible)
error_reporting(22519);                 // E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');


// register function to automatically load classes
spl_autoload_register( function($class) {
    require_once('classes/' . $class . '.php');
});


// create connection to database                       'root' , ''
$dbh = new PDO('mysql:host=localhost;dbname=phpprakt', DB_USER, DB_PASS);

// start session
session_start();
