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

<h2>T08.1N</h2>

<p>Liczbą odkrytą nazywamy liczbę całkowitą większą od 0, której wartość jest podzielna przez każdą cyfrę różną od zera, z której się składa jej zapis. Jeśli liczba całkowita jest zapisana w systemie liczbowym o podstawie p, gdzie 2≤p≤10, to jest ona liczbą odkrytą, jeśli jej wartość w systemie dziesiętnym jest podzielna przez każdą cyfrę różną od zera, z której się składa jej zapis w systemie o podstawie p.</p>

<p>Przykłady:
    Dla p=10 liczbą odkrytą jest liczba 24, ponieważ dzieli się przez 2 oraz 4, natomiast przykładem liczby nieodkrytej jest liczba 26, ponieważ dzieli się przez 2, ale nie dzieli się przez 6.</p>

<p>Napisz funkcję w języku PHP, która dla podanej liczby dziesiętnej większej od 0 zwraca TRUE, gdy liczba jest odkryta i FALSE w przeciwnym wypadku.</p>

<form method="POST" action="index.php">
    <input type="text" name="a">   <input type="submit" value="Wyślij">
</form>
<?php

if (isset($_POST['a'])){

    $a = $_POST['a'];

    function czyOdkryta($a)
    {
        $k = $a;
        while ($k>0){
            $c = $a %10;
            $k =$a/10;
            if($c==0 || $a%$c != 0 ){
                return false;
            }
            else return true;
        }
    }
    if (is_numeric(($_POST['a']))){
        if ($a>0){
            if (czyOdkryta($a)){
                echo "$a jest liczbą odkrytą";
            }
            else {
                echo "$a nie jest liczbą odkrytą";
            }
        }
        else echo "Liczba odryta musi być więkasz od zera";
    }




}

?>
</body>
</html>


