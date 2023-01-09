<?php
echo "Voici la liste des nombres compris entre 1 et 100 :";
echo "<br/>";
for ($i = 0; $i <= 100; $i++) {
    if ($i == 0) {
        echo $i;
    } elseif ($i > 0 && $i < 20) {
        echo "<br /><i>" . $i . "</i>";
    } elseif ($i >= 20 && $i < 25) {
        echo "<br />" . $i;
    } elseif ($i >= 25 && $i <= 50) {
        echo "<br /><u>" . $i . "</u>";
    } elseif ($i > 50 && $i != 42) {
        echo "<br />" . $i;
    } elseif ($i == 42) {
        echo "<br />La Plateforme_";
    }
}
?>