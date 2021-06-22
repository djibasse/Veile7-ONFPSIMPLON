<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=BDDBASSE", $username, $password);

/* définissez le mode d’erreur sur PDO*/ 
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "Connection reussite !";

} 
catch(PDOException $e) {
  /*En cas d'erreur Affiche connection échoué*/
  echo "Connection échouée !" . $e->getMessage();
}
?>


