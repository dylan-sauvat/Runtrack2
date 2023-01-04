<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = array('consonnes' => 0,'voyelles' => 0);

for ($i = 0; $i < strlen($str); $i++) { 
    if (preg_match('/[aeiouy]/i', $str[$i])) { 
        $dic['voyelles']++; 
    } 
    else if (preg_match('/[bcdfghjklmnpqrstvwxz]/i', $str[$i])) { 
        $dic['consonnes']++; 
    }
} 
?>

<table>
    <thead>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic['consonnes']; ?></td>
            <td><?php echo $dic['voyelles']; ?></td>