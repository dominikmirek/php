<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 85</title>
</head>
<body>

<h1>Zadanie 85</h1>
<p>Napisz program, który dla trzech liczb całkowitym n, min, max wyświetla n liczb pseudolosowych z zakresu <min, max>.</p>

<form method="POST">
    podaj n <input type="text" name="n"><br><br>
    podaj min <input type="text" name="min"><br><br>
    podaj max <input type="text" name="max">
    <input type="submit" value="Wyślij"><br><br>
</form>

<?php
if (isset($_POST['n'])&& isset($_POST['min']) && isset($_POST['max'])){
    $n = $_POST['n'];
    $min = $_POST['min'];
    $max = $_POST['max'];
    if(is_numeric($n)&& is_numeric($max)&& is_numeric($min)){
        for ($i=0;$i<$n;$i++){
            $wynik=random_int($min, $max);
            echo $wynik." ";
        }
    }


}

?>

</body>
</html>
