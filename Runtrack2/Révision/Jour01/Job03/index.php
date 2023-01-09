<!DOCTYPE html>
<htlm lang ="eng"></htlm>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{border-collapse: collapse;}
        th,td{border:1px solid #000;padding:5px}
    </style>
    
</head>
<body>
    <main>
        <header>
            <table class="tbleau-style">
                <h1>Mon Tableau</h1>
                <thead>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Boolean</td>
                        <td>$mybool</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>integer</td>
                        <td>$myinteger</td>
                        <td>9</td>
                    </tr>

                    <tr>
                        <td>double</td>
                        <td>$mydouble</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>string</td>
                        <td>$mystr</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>array</td>
                        <td>$myarray</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>object</td>
                        <td>$myobject</td>
                        <td>3</td>
                    </tr>
                  <?php
                  $tab = array("type", "nom", "valeur");

                  

                

                 ?>
                </tbody>
            
            </table>