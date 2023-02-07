<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button name="utworz" value="Utwórz tabele"></button>
<button name="zaladuj" value="Załaduj dane"></button>
<button name="wyswietl" value="wyświetl"></button>
<?php
$db = mysqli_connect('localhost', 'root', '', '3pir_baza_pracownikow');
mysqli_set_charset($db, 'utf8');

$fp = fopen("pracownik.csv", "r");
if(isset($_POST['utworz']))
{
        $q = "CREATE IF NOT EXISTS TABLE prcownicy(id int AUTO_INCREMENT,Nazwisko varchar(50), Imie varchar(50),Stanowisko varchar(50), Dzial varchar(50), Sekcja varchar(50));";
        mysqli_query($db, $q);
}
if (isset($_POST['zaladuj'])){
    $q = "";
    mysqli_query($db, $q);
}
 if (isset($_POST['wyswielt'])){
    $q = "";
     $wynik = mysqli_query($db, $q);
     while ($el = mysqli_fetch_row($wynik)) {
         echo $el[0]."(".$el[1].")<br><br>";
     }
}
mysqli_close($db);
?>
</body>
</html>