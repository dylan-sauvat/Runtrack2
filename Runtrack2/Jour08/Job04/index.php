<?php
    if(!isset($_COOKIE['prenom'])) {
    
    }
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + (86400 * 30), "/");
    echo "Bonjour " . $_COOKIE['prenom'] . " ! ";
    }
    ?>   
     <form method="post" action="">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" value="Connexion" name="connexion">
        <input type="submit" name="deco" value="Déconnexion">
    </form>
<?php
    
    if (isset($_POST['deco'])) {
    setcookie('prenom', "", time() - 3600);
    header("location:index.php");
    }
?>
