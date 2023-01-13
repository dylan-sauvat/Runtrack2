<?php
$msqli = new mysqli('localhost', 'root', '', 'database');

$request = $msqli->query("SELECT SUM(capacite) FROM salles;");

$result = $request->fetch_all();

if ($result) {

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>nom</th>";
    echo "<th>etage</th>";
    echo "<th>capacite</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
}
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["etage"] . "</td>";
        echo "<td>" . $row["capacite"] . "</td>";
        echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";
?>