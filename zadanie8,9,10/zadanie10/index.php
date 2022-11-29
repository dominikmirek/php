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
    <h2>Zadanie 10</h2>
    <p>Napisz program, który dla danego x będącego liczbą rzeczywistą oblicza wartość wyrażenia</p>
</div>
<form method="POST" action="index.php">
    Wartość x:   <input type="text" name="c">

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['c'])) {
        $c = $_POST['c'];

        function wyswietl(&$mm){
            echo "Wartość wyrażenia: $mm";
        }

        function bezwzg($c){
            if($c>0) return  $c;
            else return $c*(-1);
        }

        function oblicz($c){
            $w = pow($c,2)/pow(1+ bezwzg($c),2);

            wyswietl($w);
        }
        if(is_numeric(($_POST['c'])))
            oblicz($c);

    }

    ?>
</div>

</body>
</html>

