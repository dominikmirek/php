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
<?php

 fopen("nazwisko_i_imie.txt", "w");
 fopen("doSkasowania.txt", "w");

unlink("doSkasowania.txt");


$kalalog = mkdir('Mirek',700);

fopen("Mirek/nazwisko_i_imie.txt", "w");


?>

</body>
</html>

