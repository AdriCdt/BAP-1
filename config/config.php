<?php


	$dbname = "mineproject";
	$host	= "localhost";
	$user	= "root";
	$pass	= "root";
    $port   = "3306";
	
	$db = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));	
	
?>