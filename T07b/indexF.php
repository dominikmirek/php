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

function copy_tab($tab){
    $tab2 = array();
    $p = 0;
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            $tab2[$p] = $tab[$i][$j];
            $p++;
        }
    }
    return $tab2;
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
        $tab[$i][$j] = rand(10, 99);
    }
}
$test = true;
while ($test) {
    $test = false;
    $tab2= copy_tab($tab);
    sort($tab2);
    for ($i = 0; $i < 47; $i++){
        echo $tab2[$i]." ";
    }
    echo "<br>";
    $p=0;
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if($tab2[$p]==$tab2[$p+1]){
                $tab[$i][$j]= rand(10,99);
                $test = true;
            }
            $p++;
        }
    }
}
wyswietl($tab);
?>
