<form method="post">
    <input type="text" name="arg1" />
    <input type="text" name="arg2" />
    <input type="submit" value="Envoyer" />
</form> 


<?php
if(isset($_POST)) {
    // Calcul du nombre d'arguments
    $nbArgs = count($_POST); 
    // Affichage du nombre d'arguments
    echo "Le nombre d'argument POST envoyé est : ".$nbArgs;
}
?>
