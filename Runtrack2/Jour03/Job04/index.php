<?php
$str = "Dans l'espace, personne ne vous entend crier";
$str_length = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $str_length++;
}

echo "Le nombre de caractères présents dans la chaîne est de " . $str_length;
?>