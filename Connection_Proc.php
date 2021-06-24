<?php 
$servername = "localhost";/* Mon serveur MySQL*/
$username = "root"; /*Utilisateur root*/
$password = ""; 

// Créer la connection
$conn = mysqli_connect($servername, $username, $password);

// Verifier la connection
if (!$conn) {
    /* Si la connexion a échoué ca nous renvoi un message d'erreur 
    et ca arrete notre script*/
  die("Connection failed: " . mysqli_connect_error());
}
/* Dans ce cas ça nous affiche un message succes 
en cas de reussite de connection*/
echo "Connected successfully";
?>

