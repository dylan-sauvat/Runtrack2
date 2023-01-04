<?php 
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$strlen = strlen($str);
$strtemp = "";

for($i=0;$i<$strlen;$i++){
    if($i == $strlen-1){
        $strtemp .= $str[0];
    }
    else{
        $strtemp .= $str[$i+1];
    }
}

echo $strtemp;

?>