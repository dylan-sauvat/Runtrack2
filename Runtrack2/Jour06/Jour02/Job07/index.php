<?php
//  Initialisation des variables
$hauteur = 5;

// Boucle qui permet de créer le triangle
for($i=1; $i<=$hauteur; $i++){
    
    // Boucle qui permet d'afficher les étoiles
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>