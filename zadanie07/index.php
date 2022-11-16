<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" ">
</head>
<body>
<div class="intro">
    <h1>Dominik Mirek</h1>
    <h2>Zadanie 7</h2>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
</div>
<form method="POST" action="index.php">
    podaj  temperaturę w oC: :   <input type="text" name="temp">
    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['temp'])) {
        $tempC = $_POST['temp'];
        $tempK = 273.15 + $tempC;
        $tempF = ($tempC * 9 / 5) + 32;

        echo "Wyniki obliczeń dla TCelsiusz = $tempC<br>";
        echo "T Kelvin = $tempK<br>";
        echo "T Fahrenheit= $tempF<br>";
    }
    ?>

</div>

</body>
</html>


