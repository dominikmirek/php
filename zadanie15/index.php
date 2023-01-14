<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
<div class="b1">
    <img src="klaps1.png" alt="Nasze filmy">
</div>
<div class="b2">
    <h1>BAZA FIMLÓW</h1>
</div>
<div class="b3">
    <form method="POST" action="index.php">
        <select name="gatunek[]">
            <option name="Sci-Fi">Sci-Fi</option>
            <option name="animacje">animacje</option>
            <option name="dramat">dramat</option>
            <option name="horror">horror</option>
            <option name="komedia">komedia</option>
        </select>
        <input type="submit" value="Fimly">
    </form>
</div>
<div class="b4">
    <img src="gwiezdneWojny.jpg" alt="szturowcy">
</div>
<div class="g1">
    <h2>
        Wybrano filmy:
    </h2>
    <?php
    $l=1;
    $gatunek = "";
    foreach ($_POST['gatunek'] as $gatunek) {
    }
    switch ($gatunek){
        case "Sci-Fi":
            $l=1;
            break;
        case "animacje":
            $l=2;
            break;
        case "dramat":
            $l=3;
            break;
        case "horror":
            $l=4;
            break;
        case "komedia":
            $l=5;
            break;
    }
$db = mysqli_connect('localhost','root','','3pir_dane');
    mysqli_set_charset($db,'utf8');
$q ="SELECT tytul,rok,ocena FROM `filmy` WHERE gatunki_id = $l;";
$wynik = mysqli_query($db,$q);
while ($el = mysqli_fetch_row($wynik)){
    echo "Tytuł: ".$el[0].", Rok produkcji: ".$el[1].", Ocena: ".$el[2]."<br><br>";
}

mysqli_close($db);
    ?>
</div>
<div class="g2">
    <h2>Wszystkie fimly</h2>
    <?php
    $db = mysqli_connect('localhost','root','','3pir_dane');
    mysqli_set_charset($db,'utf8');
    $q = "SELECT filmy.id, filmy.tytul, rezyserzy.imie,rezyserzy.nazwisko FROM `filmy`INNER JOIN rezyserzy WHERE filmy.rezyserzy_id = rezyserzy.id;";
    $wynik = mysqli_query($db,$q);
    while ($el = mysqli_fetch_row($wynik)){
        echo $el[0]." ".$el[1].", reżyseria: ".$el[2]." ".$el[3]."<br><br>";
    }
mysqli_close($db);
?>
</div>
<div class="foot">
    <p>Autor: Dominik Mirek</p>
    <a href="kwerendy.txt">Zapytania do bazy</a>
    <a href="fimly.pl" target="_blank">Przejdź do filmy.pl</a>
</div>
</body>
</html>

