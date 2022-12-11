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
    <h2>3 pir</h2>
</div>
<div class="wynik">
<?php

$p = fopen("narodoweCzytanie.txt", "w");

$t = "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”. ";
$t1 = "WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R. ";
$t2 = "NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.";
$t3 =  "FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.";
$tekst = $t . "\r\n" . $t1 . "\r\n" . $t2 . "\r\n" . $t3;

fwrite($p, $tekst);
fclose($p);

function odczyt($p){

    while(!feof($p))
    {
        $linia = fgets($p);
        echo $linia."<br>";
    }
}

$p = fopen("narodoweCzytanie.txt", "r");

odczyt($p);

?>
</div>
</body>
</html>


