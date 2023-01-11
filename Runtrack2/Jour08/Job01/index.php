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

session_start();
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites']++;
echo "Nombre de visites : " . $_SESSION['nbvisites'];

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

?>