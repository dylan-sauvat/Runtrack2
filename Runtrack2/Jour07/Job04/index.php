<?php
function calcule($a, $operation, $b) {
    $operations = array(
        "+" => function($a, $b) { return $a + $b; },
        "-" => function($a, $b) { return $a - $b; },
        "*" => function($a, $b) { return $a * $b; },
        "/" => function($a, $b) { return $b != 0 ? $a / $b : "Impossible de diviser par 0"; },
        "%" => function($a, $b) { return $b != 0 ? $a % $b : "Impossible de diviser par 0"; },
    );
    return isset($operations[$operation]) ? $operations[$operation]($a, $b) : "Opération non valide";
}

echo calcule(5, "+", 7);

?>