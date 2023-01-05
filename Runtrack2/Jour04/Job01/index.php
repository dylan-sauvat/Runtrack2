<form action="process.php" method="get">
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="Email" />
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_GET)) {
    // Calcul du nombre d'arguments
    $nbArgs = count($_GET); 
    // Affichage du nombre d'arguments
    echo "Le nombre d'argument GET envoyé est : ".$nbArgs;
}
?>