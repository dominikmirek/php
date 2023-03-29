<?php
function wyswietl($tab){
    echo "<table>";
    for($i=0;$i<7;$i++){
        echo"<tr>";
        for($j=0;$j<7;$j++){
            echo"<td>". $tab[$i][$j]."</td>";
        }
        echo"</tr>";
    }
    echo "</table>";
}

$tab = array(
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0),
    array(0,0,0,0,0,0,0)
);
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        $wylos = 0;
        $test = true;
        while ($test) {
            $test = false;
            $wylos = rand(10, 99);

            if (in_array($wylos, $tab[0]) || in_array($wylos, $tab[1]) || in_array($wylos, $tab[2]) || in_array($wylos, $tab[3]) ||
                in_array($wylos, $tab[4]) || in_array($wylos, $tab[5]) || in_array($wylos, $tab[6]))
                $test = true;
        }
        $tab[$i][$j] = $wylos;
    }
}
wyswietl($tab);

?>
