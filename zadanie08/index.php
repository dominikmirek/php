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
    <h2>Zadanie 8</h2>
    <p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy. Program zadziała dla s większego od 0.
        Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>
</div>
<form method="POST" action="index.php">
    podaj ilość sekund s =   <input type="text" name="s">

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php
    if (isset($_POST['s'])) {
        $s = $_POST['s'];


        $g = floor($s/3600);
        $s = $s%3600;
        $m = floor($s/60);
        $s = $s%60;

        echo "$g g $m m $s s";

    }

    ?>
</div>

</body>
</html>


