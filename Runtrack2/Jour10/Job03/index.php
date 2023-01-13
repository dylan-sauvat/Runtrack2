<?php
$msqli = new mysqli('localhost', 'root', '', 'database');

$request = $msqli->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");

$result = $request->fetch_all();

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Naissance</th>";
    echo "</tr>";
    echo "<tbody>";

}   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</tbody>";
?>








