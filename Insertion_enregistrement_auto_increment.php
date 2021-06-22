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
$sql = "INSERT INTO etudiant (nom, prenom, email, date_naissance)
  VALUES ('Dia', 'Salif', 'salifdia@gmail.com','1995-12-11'),
          ('Dieng', 'Babacar', 'babacardieng@gmail.com', '2000-10-19')
  ";
  // use exec() because no results are returned

if ($conn->query($sql) === TRUE) {
  echo "Insertion auto_increment reussite";
} else {
  echo "Erreur lors de la creation de la table: " . $conn->error;
}

$conn->close();
?>