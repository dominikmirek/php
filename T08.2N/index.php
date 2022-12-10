<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>rect{padding: 0; margin: 0}</style>
</head>
<body>
<h1>Dominik Mirek</h1>
<h2>T08.2N</h2>
<p>
    Napisz kod php z funkcją szachownica($a). Funkcja przyjmuje jeden parametr. który określa ilość kratek w wierszu i kolumnie.
</p>
<form method="POST" action="index.php">
    <input type="text" name="a">   <input type="submit" value="Wyślij">
</form>
<br>
<?php
if (isset($_POST['a'])){

    $a = $_POST['a'];


    function kwadrat_z(){
        echo '<svg width="50" height="50"><rect width="50" height="50" style="fill:rgb(255,255,0)"></rect></svg>';
    }

    function kwadrat_n(){
        echo '<svg width="50" height="50"><rect width="50" height="50" style="fill:rgb(0,0,255)"></rect></svg>';
    }

    function linia_p($a){
        for ($i = 0; $i < $a; $i++){
            if ($i%2 == 0){
                kwadrat_z();
            }
            else {
                kwadrat_n();
            }
        }
    }
    function linia_l($a){
        for ($i = 0; $i < $a; $i++){
            if ($i%2 == 0){
                kwadrat_n();
            }
            else {
                kwadrat_z();
            }
        }
    }


    function szachownica($a)
    {
        for ($j = 0; $j < $a; $j++){
            if ($j%2==0){
                linia_p($a);
            }
            else {
                linia_l($a);
            }
            echo"<br>";
        }
    }

    if (is_numeric(($_POST['a']))){
        szachownica($a);
    }








}
?>
</body>
</html>



