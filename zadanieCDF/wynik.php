<?php

if (isset($_POST['imie'])) {
    $imie = $_POST['imie'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    echo "<h1>Witaj $imie na mojej stronie </h1><br>";

    $licznik = 0;

    $liczby =[$a,$b,$c,$d];

    var_dump($liczby);

    $liczby = [(float)$a,(float)$b,(float)$c,(float)$d];

    $suma = $liczby[0]+$liczby[1]+$liczby[2]+$liczby[3];

    for ($i=0;$i<4;$i++){
      if(is_numeric($liczby[$i])and $liczby[$i]!=0) $licznik++;
    }

    $srednia = $suma/$licznik;



   echo "<br>Suma = $suma<br>";
   echo "Średnia = $srednia<br>";

}

?>
