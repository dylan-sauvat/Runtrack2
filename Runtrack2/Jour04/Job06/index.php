<form method="GET">
    <input type="text" name="nombre">
    <input type="submit" value="Valider">
</form>

<?php
    if (isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];

        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
?>