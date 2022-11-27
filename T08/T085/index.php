<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>td { border: 1px solid black; } </style>
</head>
<body>
<h1>Dominik Mirek</h1>
<table>
    <tr>
        <td>Imię i nazwisko:</td><td>Klasa/grupa:</td><td>Data:</td>
    </tr>
    <tr>
        <td><input type="text" name="imie"></td> <td><input type="text" name="klasa"></td> <td><input type="text" name="data"></td>
    </tr>
</table>

<h1>T085</h1>
<p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm Euklidesa).</p>
<form method="POST" action="index.php">
    <input type="text" name="a">  <input type="text" name="b"> <input type="submit" value="Wyślij">
</form>
<?php

if (isset($_POST['a'])){

    $a = $_POST['a'];
    $b = $_POST['b'];


    function NWD($a, $b)
    {
        while (true) {
            if ($a != $b) {
                if ($a > $b) {
                    $a = $a - $b;
                } else {
                    $b = $b - $a;
                }
            } else {
                return $a;
            }
        }
    }

    if (is_numeric(($_POST['a'])) and is_numeric(($_POST['b']))){
        $wynik = NWD($a,$b);
        echo "NWD($a,$b) =  $wynik";
    }



}

?>
</body>
</html>

