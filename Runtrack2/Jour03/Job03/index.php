<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$result = '';

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'I' || $char == 'o' || $char == 'u' || $char == 'y') {
        $result .= $char;
    }
}

echo $result;
?>