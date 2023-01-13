<?php
$msqli = new mysqli('localhost', 'root', '', 'database');

$request = $msqli->query("SELECT * FROM etudiants");

$result = $request->fetch_all();

if ($result) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>prenom</th>";
    echo "<th>nom</th>";
    echo "<th>naissance</th>";
    echo "<th>sexe</th>";
    echo "<th>email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

}    
    while ($row = $result->fetch_assocS()) {
        echo "<tr>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
        echo "<td>" . $row["sexe"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";

?>
