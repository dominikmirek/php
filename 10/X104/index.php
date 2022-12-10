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

$p = fopen("napisy.txt", "r");

$i = 1;
while(!feof($p))
{
    if($i>1000) break;

        $linia = fgets($p);
        echo "Liczba nr " . $i . " - " . $linia . " - " . bindec($linia) . "<br>";
        $i++;
}

?>

</body>
</html>



