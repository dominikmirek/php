<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table,td{
        border: solid black 1px;
    }
</style>
<body>
<br>
<form  method="POST">
    <input type="submit" name="utworz" value="Utwórz tabele"><br>
    <input type="submit" name="zaladuj" value="Załaduj dane"><br>
    <input type="submit" name="wyswietl" value="wyswietl"><br>
    <form>
<?php
$db = mysqli_connect('localhost', 'root', '', '3pir_2_baza_pracownikow');
mysqli_set_charset($db, 'utf8');

if(isset($_POST['utworz']))
{
        $q = "CREATE TABLE IF NOT EXISTS pracownicy(id int,Nazwisko varchar(50), Imie varchar(50),Stanowisko varchar(50), Dzial varchar(50), Sekcja varchar(50));";
        mysqli_query($db, $q);
}
if (isset($_POST['zaladuj'])){
    $plik = fopen("pracownicy2.txt", "r");

    while(!feof($plik))
    {
        $linia = fgets($plik);
        $slowa = explode(';',$linia);
        $q = "INSERT INTO pracownicy VALUES('".$slowa[0]."', '".$slowa[1]."', '".$slowa[2]."',' ".$slowa[3]."',' ".$slowa[4]."',' ".$slowa[5]."');";
        mysqli_query($db, $q);
    }
}
 if (isset($_POST['wyswietl'])){
    $q = "SELECT * FROM pracownicy;";
     $wynik = mysqli_query($db, $q);
     echo "<table>";
     while ($el = mysqli_fetch_row($wynik)) {
         echo "<tr>";
         echo "<td>".$el[0]."</td><td> ".$el[1]."</td><td>".$el[2]."</td><td> ".$el[3]."</td><td> ".$el[4]."</td><td>".$el[5]." </td>";
         echo"</tr>";
     }
     echo "</table>";
}
mysqli_close($db);
?>
</body>
</html>