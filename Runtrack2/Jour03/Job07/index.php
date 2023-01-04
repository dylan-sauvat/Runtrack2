<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";

if(isset($str)) {
    $strLength = strlen($str);
    $strResult = '';

    for ($i=0; $i < $strLength; $i++) {
        if ($i == $strLength-1) {
            $strResult .= $str[0];
        } else {
            $strResult .= $str[$i+1];
        }
    }

    echo($strResult);

} else {
    echo('Variable non définie');
}
?>