<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h>
    Dominik Mirek 3pir
</h>
<p>
    Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. <br>Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.
</p>

<form method="POST" action="srednia.php">
podaj a :<input type="text" name="a">
podaj b :<input type="text" name="b">
podaj c :<input type="text" name="c">
podaj d :<input type="text" name="d"><br>

<input type="submit" value="Wyślij">
</form>
<?php


    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];

        $srednia = pow($a * $b * $c * $d, 0.25);
        $sredniao = round($srednia, 3);

        echo "a:$a<br>";
        echo "b: $b<br>";
        echo "c: $c<br>";
        echo "d: $d<br>";
        echo "Średnia:  $srednia<br>";
        echo "Średnia zaokrąglona:  $sredniao";
    }


?>
</body>
</html>

