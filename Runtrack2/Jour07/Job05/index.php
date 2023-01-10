<?php
function occurrences($str, $char) {
    return substr_count($str, $char);
}
$result = occurrences("Bonjour", "o");
echo $result;

?>
