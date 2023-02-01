<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<div class="up1">
  <a href="borowik.jpg"> <img src="borowik-miniatura.jpg" alt="Grzybobranie"></a>
</div>
<div class="up2">
    <h1>Idziemy na grzyby!</h1>
</div>
<div class="left">
    <?php
    $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
    mysqli_set_charset($db, 'utf8');
    $q = "SELECT nazwa_pliku,potoczna FROM grzyby";
    $wynik = mysqli_query($db, $q);
    while ($el = mysqli_fetch_row($wynik)) {
        echo "<img src='$el[0]' title='$el[1]'/>";
    }
    mysqli_close($db);
    ?>
</div>
<div class="right">
    <h2> Grzyby jadalne</h2>
    <?php
    $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
    mysqli_set_charset($db, 'utf8');
    $q = "SELECT nazwa,potoczna FROM grzyby WHERE jadalny = 1;";
    $wynik = mysqli_query($db, $q);
    while ($el = mysqli_fetch_row($wynik)) {
        echo $el[0]."(".$el[1].")<br><br>";
    }
    mysqli_close($db);
    ?>
    <h2>Polecam do sosów</h2>
    <?php
    $db = mysqli_connect('localhost', 'root', '', '3pir_dane2');
    mysqli_set_charset($db, 'utf8');
    $q = "SELECT grzyby.nazwa, grzyby.potoczna,rodzina.nazwa FROM `grzyby`INNER JOIN rodzina WHERE grzyby.rodzina_id = rodzina.id AND potrawy_id = 1;";
    $wynik = mysqli_query($db, $q);
        echo"<ol>";
    while ($el = mysqli_fetch_row($wynik)) {
        echo "<li>".$el[0]."(".$el[1]."), rodzina: ".$el[2]."</li>";
    }
    echo "</ol>";
    mysqli_close($db);
    ?>
</div>
<div class="fotter">
    <p>Autro: Dominik Mirek</p>
</div>
</body>
</html>
