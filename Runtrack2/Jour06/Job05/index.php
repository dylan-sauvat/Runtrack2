<!DOCTYPE html>
<html>
<head>
    
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire css</title> 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type='text/css' media='screen' href=<?= $_POST["style"] ?>>
   
</head>
<main>
<body>
<form method="post" action="index.php">


  <label for="style">Choisissez un style :</label><br>
  <select id="style" name="style">
    <option value="style1.css">style1</option>
    <option value="style2.css">style2</option>
    <option value="style3.css">style3</option>
  </select><br>
  <input type="submit" value="Envoyer">
</form> 
<?php
    var_dump($_POST["style"]);
     ?>
</main>
</body>
</html>
