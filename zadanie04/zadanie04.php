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

<h1>Dominik Mirek</h1>
<h2>Zadanie 4</h2>
<p>Napisz program, który oblicza i wyświetla iloraz 2 liczb rzeczywistych z dokładnością do dwóch miejsc po przecinku.</p>

<form method="POST" action="zadanie04.php">
    podaj a :<input type="text" name="a">
    podaj b :<input type="text" name="b"><br>

    <input type="submit" value="Wyślij">
</form>
<?php


if (isset($_POST['a'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if($b==0){
        echo "Nie dziel przez 0";
    }
    else{
        $iloczyn = round(($a/$b),2);
        echo "Wynik $a:$b = $iloczyn";
    }

}


?>
</body>
</html>

