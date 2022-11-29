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
    <h2>Zadanie 9</h2>
    <p>Napisz program, który zamienia długość podaną w calach na mm.
        (1cal=25,3995 mm)</p>
</div>
<form method="POST" action="index.php">
    Długość w calach:   <input type="text" name="c">

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['c'])) {
        $c = $_POST['c'];

        function wyswietl(&$mm,&$c){
            echo "$c cali to $mm";
        }
        function przelicz_na_cale($c){
            $mm = 25.3995 * $c;
            wyswietl($mm,$c);
        }
        if(is_numeric(($_POST['c'])))
            przelicz_na_cale($c);

    }

    ?>
</div>

</body>
</html>

