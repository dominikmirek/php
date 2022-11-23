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
<p></p>
<?php

if (isset($_POST['imie'])&& isset($_POST['klasa']) && isset($_POST['data'])){

    echo'<h1>T081</h1>';


}

?>
?>
</body>
</html>
