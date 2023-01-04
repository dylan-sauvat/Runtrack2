<?php
echo "Voici la liste des nombres premier jusqu'à 1000 :";
echo "<br/>";
// Initialisation des variables
$nombre = 2;

// Boucle pour afficher les nombres premiers jusqu'à 1000
while ($nombre <= 1000) {

    // Initialisation de la variable pour compter le nombre de diviseurs
    $diviseur = 0;
    // Boucle pour compter les diviseurs
    for ($i = 1; $i <= $nombre; $i++) {
        if ($nombre % $i == 0) {
            $diviseur++;
        }
    }
    // Si le nombre n'a que 2 diviseurs, alors il est premier
    if ($diviseur == 2) {
        echo $nombre . "<br />";
    }
    $nombre++;
}
?>