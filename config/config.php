<?php
    ini_set("display_errors", true); 
    error_reporting(E_ALL&~E_NOTICE);
    session_start();
    $mysqli=new mysqli('localhost','aclass_da_u', 'a64499446A', 'aclass_davani');
    if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    $mysqli->set_charset("utf8");
  //define('ABSOLUTE_URL','http://davani.aclass.pro/');
   define('ABSOLUTE_URL','http://localhost/davani_old/');
    define('TEMPLATE_URL',ABSOLUTE_URL.'templates/davani/');
    include 'functions.php';
