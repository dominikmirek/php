<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pracownicy</title>
    <style>
        body{
            text-align: center;
            margin-left: 400px;
        }
        p{
            border: 3px solid black;
            width: 500px;
        }
    </style>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root",'',"3pir_02_pracownicy_w_kolorze");
$q = "SELECT * FROM pracownicy;";
$wynik = mysqli_query($db,$q);
while ($el = mysqli_fetch_row($wynik)){
    echo " <p style='background-color: $el[6]'> $el[1] $el[2] $el[3] $el[4] $el[5] </p>";
}


?>
</body>
</html>