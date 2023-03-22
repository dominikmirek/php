<?php

$db = mysqli_connect('localhost','root','','3pir_2_pacjenci');
$q = "SELECT * FROM tabela_1";
$wynik = mysqli_query($db,$q);
echo "<table style='border: black solid 1px'>";
while ($el = mysqli_fetch_row($wynik)){
echo " <tr><td>$el[0]</td><td>$el[1]</td><td>$el[2]</td><td>$el[3]</td></tr>";
}
echo "</table>";
mysqli_close($db);

?>
