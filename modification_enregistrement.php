<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BDDPHP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = " UPDATE ETUDIANT
          SET nom ='SARR'
          WHERE id=1
  ";
  // use exec() because no results are returned

if ($conn->query($sql) === TRUE) {
  echo "Modification de l'enregistrement reussite";
} else {
  echo "Erreur lors de la modification de la table: " . $conn->error;
}

$conn->close();
?>