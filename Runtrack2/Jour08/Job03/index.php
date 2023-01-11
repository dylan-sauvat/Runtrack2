<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post" action="">
    <label for="prenom">Entrez votre prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Envoyer">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
</body>
</html>

<?php

session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array();
}
if(isset($_POST['prenom'])){
    array_push($_SESSION['prenoms'], $_POST['prenom']);
}
foreach($_SESSION['prenoms'] as $prenom) {
    echo $prenom;
}
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}
?>
