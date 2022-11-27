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

<h1>T083</h1>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W przypadku podania innej wartości zwraca informację o błędzie.</p>
<form method="POST" action="index.php">
    <input type="text" name="a">  <input type="submit" value="Wyślij">

</form>
<?php

if (isset($_POST['a'])){

    $a = $_POST['a'];
    function miesiac($a){
        switch ($a){
            case 1:
                return "Styczeń";
            case 2:
                return "Luty";
            case 3:
                return "Marzec";
            case 4:
                return "Kwiecień";
            case 5:
                return "Maj";
            case 6:
                return "Czerwiec";
            case 7:
                return "Lipiec";
            case 8:
                return "Sierpień";
            case 9:
                return "Wrzesień";
            case 10:
                return "Październik";
            case 11:
                return "Listopad";
            case 12:
                return "Grudzień";
            default:
                return "Błąd";
        }
    }
    echo miesiac($a);

}

?>
</body>
</html>

