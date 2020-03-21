<?php 
$host = "localhost";
$user = "root";
$password = "";

$mysqli = new mysqli($host, $user,$password);
if ($mysqli->connect_errno){
	printf("Connection failed: %s\n", $mysqli->connect_error);
	die();
}

if (!$mysqli->query('CREATE DATABASE cr10_david_jaroska_biglibrary')){
	printf("Errormessage: %s\n", $mysqli->error);
}

$mysqli->query(
	'CREATE TABLE `cr10_david_jaroska_biglibrary`.`entries`
	(`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`title` VARCHAR(255) NOT NULL,
	`author` VARCHAR(255) NOT NULL,
	`ISBN` VARCHAR(255) NOT NULL,
	`desc` VARCHAR(255) NOT NULL,
	`img` VARCHAR(255) NOT NULL,
	`pub_date` DATE,
	`publisher`VARCHAR(255) NOT NULL,
	`avaiable` VARCHAR(255) NOT NULL DEFAULT "avaiable");'
) or die ($mysqli->error);

?>