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
    <p>Zadanie 3</p>
</div>
<div class="wynik">
<?php

$p = fopen("imiona.txt", "r");

echo " W kolejności zapisania: <br><br>";

while(!feof($p))
{
    $linia = fgets($p);
    echo $linia."<br>";
}
echo "<br>";
echo "Odwrtnie: <br><br>";
fclose($p);
$p = fopen("imiona.txt", "r");

$tab[] = array();
$i = 0;
while(!feof($p))
{
    $linia = fgets($p);
    $tab[$i] =  $linia;
    $i++;
}

for($j = 6; $j>=0;$j--){
    echo $tab[$j]."<br>";
}




?>
</div>
</body>
</html>


