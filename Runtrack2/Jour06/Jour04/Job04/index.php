<form method="post">
  <input type="text" name="prenom" placeholder="prenom">
  <input type="text" name="nom" placeholder="nom">
  <input type="submit" name="submit" value="Envoyer">
</form>

<?php
if (isset($_POST['submit'])) {
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  echo "<table>";
  echo "<tr><td>Argument</td><td>Valeur</td></tr>";
  echo "<tr><td>Prenom</td><td>$prenom</td></tr>";
  echo "<tr><td>Nom</td><td>$nom</td></tr>";
  echo "</table>";
}

?>