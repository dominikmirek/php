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
<br>
<form  method="POST">
    <input type="submit" name="utworz" value="Utwórz tabele"><br>
    <input type="submit" name="zaladuj" value="Załaduj dane"><br>
    <input type="submit" name="wyswietl" value="wyswietl"><br>
    <form>
<?php
$db = mysqli_connect('localhost', 'root', '', '3pir_baza_pracownikow');
mysqli_set_charset($db, 'utf8');

if(isset($_POST['utworz']))
{
        $q = "CREATE TABLE prcownicy(id int AUTO_INCREMENT,Nazwisko varchar(50), Imie varchar(50),Stanowisko varchar(50), Dzial varchar(50), Sekcja varchar(50));";
        mysqli_query($db, $q);
}
if (isset($_POST['zaladuj'])){
  //  $q = "";
   // mysqli_query($db, $q);
    echo biez();

}
 if (isset($_POST['wyswietl'])){
    $q = "SELECT * FROM pracownicy;";
     $wynik = mysqli_query($db, $q);
     while ($el = mysqli_fetch_row($wynik)) {
         echo $el[0].", ".$el[1].$el[2].", ".$el[3].", ".$el[4].", ".$el[5].", "."<br>";
     }
}
 function biez(){
     $plik = fopen("pracownicy.csv", "r");
     $zawartosc = '';
     while(!feof($plik))
     {
         $linia = fgets($plik);
         $zawartosc .= $linia."<br>";
     }
     $zawartosc = mb_convert_encoding($zawartosc, 'UTF-8', "ISO-8859-2");
      return $zawartosc;
 }

mysqli_close($db);
?>
</body>
</html>