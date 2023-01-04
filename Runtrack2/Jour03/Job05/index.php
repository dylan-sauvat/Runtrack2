
<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("consonnes" => 0, "voyelles" => 0);

for ($i = 0; $i < strlen($str); $i++) {
  if (in_array($str[$i], array("a", "e", "i", "o", "u", "y", "é", "è", "à", "ù", "A", "E", "I", "O", "U", "Y"))) {
    $dic["voyelles"] += 1;
  } elseif (!in_array($str[$i], array(" ", "'", "’"))) {
    $dic["consonnes"] += 1;
  }
}
echo "<table>
    <thead>
      <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
      </tr>
    </thead>
    <tbody>



?>

