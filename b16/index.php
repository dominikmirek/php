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
<?php
$db = mysqli_connect("localhost","root",'',"3pir_2_pacjenci");
$plik = fopen("dane.txt","r");
while (!feof($plik)){
    $z=fgets($plik);
$dane = explode(" ", $z);
    $q = "INSERT INTO tabela_1 VALUES ('$dane[0]','$dane[1]','$dane[2]','$dane[3]');";
    $wynik = mysqli_query($db,$q);
}

fclose($plik);
mysqli_close($db);

?>
</body>
</html>
