<?php
$msqli = new mysqli('localhost', 'root', '', 'database');

$request = $msqli->query("SELECT *FROM etudiant WHERE prenom LIKE 'T%';");

$result = $request->fetch_all();

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>nom</th>";
    echo "<th>naissance</th>";
    echo "<th>sexe</th>";
    echo "<th>email</th>";
    echo "</tr>";
    echo "<tbody>";

}   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</tbody>";
?>