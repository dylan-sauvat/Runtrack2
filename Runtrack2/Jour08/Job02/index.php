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
    <input type="submit" name="reset" value="Réinitialiser">
</form>
</body>
</html>
<?php
if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 0, time() + (86400 * 30), "/"); 
} else {
    setcookie('nbvisites', ++$_COOKIE['nbvisites'], time() + (86400 * 30), "/");
}
if(isset($_COOKIE["nbvisites"])){
    echo "Nombre de visites : " . $_COOKIE['nbvisites'];
}
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + (86400 * 30), "/");
}
?>