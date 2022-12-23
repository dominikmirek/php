<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
echo "<h1>Dane Osobowe klienta:</h1>";
echo "<hr>";
echo "Imie i nazwisko: " . trim($_POST['imie']) . "<br>";
echo "Adres E-mail: " . trim($_POST['email']) . "<br>";
echo "Numer Telefonu: " . trim($_POST['tel']) . "<br>";

echo "<hr>";
echo "Wiadomość: " . trim($_POST['wiad']);
echo "<hr>";

echo "<h2>Wybrałeś dla Twoich butów:</h2>";
if (!isset($_POST['kolor'])) {
    echo "Proszę zaznaczyć pole Kolor";
} else {
    echo "Kolor trampek: " . trim($_POST['kolor']);
}
echo "<br>";
echo "Rozmiar trampek: ";
    foreach ($_POST['rozmiar'] as $wartosc) {
        echo "$wartosc";
    }

echo "<br>";
echo "Dodatki: <br>";
if (!isset($_POST['kolor'])) {
    echo "Proszę zaznaczyć pole Opcje";
} else {
    foreach ($_POST['opcje'] as $wartosc) {
        echo "$wartosc <br>";
    }
}

?>
</body>
</html>

