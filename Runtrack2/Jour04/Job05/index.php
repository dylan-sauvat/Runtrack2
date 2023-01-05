<form method="post">
    <label for="username">Username :</label>
    <input type="text" name="username">
    <label for="password">Password :</label>
    <input type="password" name="password">
    <input type="submit" value="Envoyer">
</form>

<?php
if(isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == 'John' && $password == 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>