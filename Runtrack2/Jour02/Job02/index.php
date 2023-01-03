<?php
echo "Voici la liste des nombres compris entre 1 et 1337 :";
echo "<br/>";
for ($i = 0; $i <= 1337; $i++) {
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) {
        echo $i . '<br />';
    }
}
?>