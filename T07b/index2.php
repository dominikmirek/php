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
function oda($i){
    switch ($i){
        case 0:
            return 'a';
        case 1:
            return 'b';
        case 2:
            return 'c';
        case 3:
            return 'd';
        case 4:
            return 'e';
    }
}
$tab = array(
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
    array('a','a','a','a','a','a','a'),
);
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        $tab[$i][$j] = oda(rand(0,4));
    }
}
echo "<table>";
for($i=0;$i<7;$i++){
    echo"<tr>";
    for($j=0;$j<7;$j++){
        echo"<td>". $tab[$i][$j]."</td>>";
    }
    echo"</tr>";
}
echo "</table>";
$suma= 0;
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($tab[$i][$j]=='a') {
            $suma++;
        }
    }
}
echo "<br>a jest ".$suma." razy"
?>
</body>
</html>
