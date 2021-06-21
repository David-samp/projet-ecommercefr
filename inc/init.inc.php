<?php 

// phpinfo();
// Info de connexion a la bdd
$host = "localhost";
$dbname = "ecommerce";
$dbuser = "root";
$dbmdp = "root";

// Connexion a la base de donnee
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8",$dbuser,$dbmdp);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Demarrer une session
session_start();


// On définit l'URL du projet
define("URL", "http://localhost:8888/cours_php/19-projet/");

// Sur chaque page, on initialise notre variable message
$msg = "";

?>