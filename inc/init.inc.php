<?php 
// CONNECTION A LA BASE DE DONNEES
$pdo = new PDO('mysql:host=localhost;dbname=site_eboutique', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	));
// SESSION
session_start();

//CHEMIN
define('RACINE_SITE','/PHP/e-boutique/');


// VARIABLES
$msg = '';
$page = '';
$contenu = '';
$sousmenu = '';



// AUTRES INCLUSIONS
require_once('fonctions.inc.php');


?>