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
$db = mysqli_connect('localhost','root','','dane2');
mysqli_set_charset($db,"utf8");
$q1 = "INSERT INTO rezyserzy VALUES ('','Dominik','Mirek');";
mysqli_query($db,$q1);
$q = "SELECT * FROM rezyserzy WHERE 1";
$wynik = mysqli_query($db,$q);

while ($el = mysqli_fetch_row($wynik)){
    echo $el[0].", ".$el[1].", ".$el[2]."<br>";
}

mysqli_close($db);
?>
</body>
</html>

