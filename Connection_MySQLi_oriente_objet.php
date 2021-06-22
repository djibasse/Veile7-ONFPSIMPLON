<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            /*On vérifie la connexion*/
            /*Nous le signale en cas d'erreur*/
            if($conn->connect_error){
              	
                echo'Connexion reussite';
                die('Erreur : ' .$conn->connect_error);

            }
            /*Nous affiche un message de reussite au cas contraire*/
            echo 'Connexion réussie';
        ?>