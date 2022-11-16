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
    <h2>Zadanie 6</h2>
    <p>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona</p>
</div>
<form method="POST" action="index.php">
    podaj a :   <input type="text" name="a">
    podaj b :   <input type="text" name="b">
    podaj c :   <input type="text" name="c">

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if($a+$b>$c && $a+$c>$b && $b+$c>$a) {
            $p = ($a + $b + $c) / 2;
            $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
           echo "Pole trójkąta o bokach <br>";
            echo "a = $a<br>";
            echo "b = $b<br>";
            echo "c = $c<br>";
            echo "wynosi: $s<br>";
        }
        else {
        echo "Nie można zbudować trójkąta o bokach<br>";
        echo "a = $a<br>";
        echo "b = $b<br>";
        echo "c = $c<br>";
        }
    }

    ?>
</div>

</body>
</html>


