<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=school", $username, $password);
    // gestion des exeption par PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} 
    catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
