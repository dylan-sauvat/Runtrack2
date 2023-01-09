<?php
 
$str = "I'm sorry Dave I'm afraid I can't do that";
 
for($i=0;$i<strlen($str);$i++){
    if(isset($str[$i]) && ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'I' || $str[$i] == 'o' || $str[$i] == 'u')){
        echo $str[$i];
    }
}
 
?>
