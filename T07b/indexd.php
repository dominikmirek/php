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
function wyswietl($tab){
    echo "<table>";
    for($i=0;$i<4;$i++){
        echo"<tr>";
        for($j=0;$j<4;$j++){
            echo"<td>". $tab[$i][$j]."</td>";
        }
        echo"</tr>";
    }
    echo "</table>";
}
function odwrocona($tab){
    echo "<table>";
    for($i=0;$i<4;$i++){
        echo"<tr>";
        for($j=3;$j>=0;$j--){
            echo"<td>". $tab[$j][$i]."</td>";
        }
        echo"</tr>";
    }
    echo "</table>";
}
function suma($tab){
    $suma = 0;
    $wynik = array(0,0,0,0);
    for($i=0;$i<4;$i++){
        for($j=0;$j<4;$j++){
            if($tab[$i][$j]==0)$suma++;
        }
        $wynik[$i]=$suma;
        $suma=0;
    }
    $wynik2 = $wynik;
    sort($wynik2);
    for($i=0;$i<4;$i++){
        if($wynik[$i]==$wynik2[0]){
           for($j=0;$j<4;$j++){
               echo $tab[$i][$j];
           }
           echo"<br>";
        }
    }
}
$tab = array(
    array(0,0,0),
    array(0,0,0),
    array(0,0,0),
    array(0,0,0)
);
for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        $tab[$i][$j] = rand(0,1);
    }
}

wyswietl($tab);
echo"<br> Najwieksze wiersze to:<br>";
suma($tab);
echo"<br> odwrócona tablica<br>";
odwrocona($tab);
?>
</body>
</html>