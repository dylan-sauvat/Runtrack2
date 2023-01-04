<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

if(isset($str)) {
   $str_reversed = strrev($str);
   echo $str_reversed;
}

?>