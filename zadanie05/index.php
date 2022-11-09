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
<h2>Zadanie 5</h2>
<p>Napisz program, który oblicza i wyświetla iloraz 2 liczb rzeczywistych z dokładnością do dwóch miejsc po przecinku.</p>
</div>
<form method="POST" action="index.php">
    podaj a :   <input type="text" name="a">
    podaj b :   <input type="text" name="b"><br><br>

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php


    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $s = $a+$b;
        $r = $a-$b;
        $iloraz =$a*$b;


        echo "a: $a <br>";
        echo "b: $b <br>";
        echo "suma: $s <br>";
        echo "różnica: $r <br>";
        echo "iloraz: $iloraz <br>";
        if($b==0){
            echo "iloczyn: Nie dziel przez 0 <br>";
            echo "reszta z dzielenia: Nie istnieje <br>";
        }
        else{
            $iloczyn = floor($a/$b);
            $m = $a%$b;
            echo "iloczyn: $iloczyn <br>";
            echo "reszta z dzielenia: $m <br>";
        }

    }

    ?>
</div>

</body>
</html>


