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

<h1>T081</h1>
<p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
<form method="POST" action="index.php">
<input type="text" name="liczba"> <input type="submit" value="Wyślij">
</form>
<?php

if (isset($_POST['liczba'])){

    $liczba = $_POST['liczba'];
    function bezwzgledna($liczba){
        return  ($liczba>0)?$liczba:$liczba*-1;
    }
    $wynik = bezwzgledna($liczba);
    echo "wartości bezwzględna : $wynik" ;


}

?>
</body>
</html>
