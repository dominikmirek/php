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

<h1>T084</h1>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.</p>
<form method="POST" action="index.php">
    <input type="text" name="a">  <input type="text" name="b"> <input type="submit" value="Wyślij">

</form>
<?php

if (isset($_POST['a']) && isset($_POST['b'])){

    $a = $_POST['a'];
    $b = $_POST['b'];

    function styl($a,$b){
        if ($a>$b){
            echo "<p style=\"color: red\">" . $a . "</p>";
            echo "<p style=\"color: green\">" . $b . "</p>";
        }
        else if($a<$b){
            echo "<p style=\"color: green\">" . $a . "</p>";
            echo "<p style=\"color: red\">" . $b . "</p>";
        }
        else {
            echo "<p style=\"color: blue\">" . $a . "</p>";
            echo "<p style=\"color: blue\">" . $b . "</p>";
        }
    }
    if (is_numeric(($_POST['a'])) and is_numeric(($_POST['b']))){
        styl($a,$b);
    }





}

?>
</body>
</html>

