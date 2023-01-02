<!DOCTYPE html>
<htlm lang ="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
   </head>
   <body>
     <?php 
       $str = "La Plateforme"; // affecte La Plateforme à la variable $str
       $str2 = "Vive"; // affecte Vive à la variable $str2
       $str3 = "!"; // affecte ! à la variable $str3

     echo $str2. $str. $str3;
     ?>
     <br>
     <?php
     $val = "6"; // affecte 6 à la variable $val
     
     echo $val;
    
     $val = $val +4; // ajoute 4 à la variable $val
     
     echo "<br>";
     
     echo $val

       ?>
      <br>
       <?php
     $myBool = "true"; //affecte true à la variable $myBool
     
     echo $myBool;
     
     echo "<br>";
       $myBool = "false"; // affecte false à la variable $myBool
     echo $myBool;
       ?>
       
      </body>
   </html>