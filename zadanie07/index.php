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
    podaj  temperaturę w <sup>o</sup>C:   <input type="text" name="temp">
    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['temp'])&& is_numeric($_POST['temp'])) {

        $tempC = $_POST['temp'];
        if ($tempC<-273.15){
            echo "Tak temperarura nie istnieje";
        }else {

            function tempzk($t)
            {
                return 273.15 + $t;
            }

            $tempK = tempzk($tempC);

            function tempzf($t)
            {
                return ($t * 9 / 5) + 32;
            }

            $tempF = tempzf($tempC);

            echo "Wyniki obliczeń dla <sub>T</sub>Celsiusz = $tempC<br>";
            echo "<sub>T</sub>Kelvin = $tempK<br>";
            echo "<sub>T</sub>Fahrenheit= $tempF<br>";
        }
    }
    ?>

</div>

</body>
</html>


