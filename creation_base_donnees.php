<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*Creation de notre base de données*/
	  $sql = "CREATE DATABASE BDDPHP";
  // on utilise exec() pour verifier le resultat de la requete
  $conn->exec($sql);
  echo "Création de la base reussite <br>";
} 
	/* Nous renvois ereur en cas d'echec*/
	catch(PDOException $e) {
  echo $sql . $e->getMessage();
}

$conn = null;
?>