<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>jeu du Morpion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post" action="">
    <table>
    <tr>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
  </tr>
  <tr>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
  </tr>
  <tr>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
    <td><button type="submit" value="-">-</button></td>
  </tr>
</table>
 <input type="submit" name="reset" value="Réinitialiser la partie">
</form>
</body>
</html>

<?php
session_start();

$grid = $_SESSION['grid'] ?? [    ["-", "-", "-"],
    ["-", "-", "-"],
    ["-", "-", "-"],
];
;
$turn = $_SESSION['turn'] ?? "X";

if (isset($_POST['case00'])) {
    if ($grid[0][0] === "-") {
        $grid[0][0] = $turn;
        $turn = ($turn === "X") ? "O" : "X";
    }
}
if (isset($_POST['case01'])) {
    if ($grid[0][1] === "-") {
        $grid[0][1] = $turn;
        $turn = ($turn === "X") ? "O" : "X";
    }
}

if (isset($_POST['reset'])) {
    $grid = [        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"],
    ];
}
$_SESSION['grid'] = $grid;
$_SESSION['turn'] = $turn;

?>