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
<form  method="POST">
<input type="submit" name="wyswietl" value="wyswietl">
    <form>
<?php
if (isset($_POST['wyswietl'])) {
   echo biez();
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
?>
</body>
</html>
