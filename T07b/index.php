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
$tab = array(
    array(0,0,0),
    array(0,0,0),
    array(0,0,0)
);
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
       $tab[$i][$j] = rand(0,9);
    }
}
echo "<table>";
for($i=0;$i<3;$i++){
    echo"<tr>";
    for($j=0;$j<3;$j++){
       echo"<td>". $tab[$i][$j]."</td>>";
    }
    echo"</tr>";
}
echo "</table>";

$suma1 = $tab[0][0]+$tab[1][1]+$tab[2][2];
$suma2 = $tab[0][2]+$tab[1][1]+$tab[2][0];
if($suma1>$suma2){
    echo "Przekątna LG_PD jest wieksza = ".$suma1."<br> przekątna LD_PG = ".$suma2;
}
else if($suma1<$suma2){
    echo "Przekątna LD_PG jest wieksza = ".$suma2."<br>przekątna LG_PD = ".$suma1;
}
else{
    echo "Przekatne sa równe = ". $suma2;
}

?>
</body>
</html>
