 <?php
            try{
                $dbco = new PDO("mysql:host=localhost;dbname=bddphp", "root", "");
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                /*Sélectionne toutes les valeurs s de la table
                  etudiant pour l'id =1 */
                $sth = $dbco->prepare("SELECT * FROM etudiant WHERE id = 1");
                $sth->execute();
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
                echo '<pre>';
                print_r($resultat);
                echo '</pre>';
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
