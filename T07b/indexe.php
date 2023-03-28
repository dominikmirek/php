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

<form method="POST">
    lireta 1  <input type="text" name="l1"><br>
    lireta 2  <input type="text" name="l2"><br>
    lireta 3  <input type="text" name="l3"><br>
    lireta 4  <input type="text" name="l4"><br>
    lireta 5  <input type="text" name="l5"><br>
    lireta 6  <input type="text" name="l6"><br>
    lireta 7  <input type="text" name="l7"><br>
    lireta 8  <input type="text" name="l8"><br>
    lireta 9  <input type="text" name="l9"><br>
    lireta 10  <input type="text" name="l10"><br>
    <input type="submit">
</form>
<br><br>

<form method="POST">
długość losowego słowa: <input type="text" name="dl"><br>
ilość słówa: <input type="text" name="il"><br>
    <input type="submit">
</form>
<?php
function wyswietl($tab){
    for
}


$tab = array('a','a','a','a','a','a','a','a','a','a');

if(isset($_POST['l1'])&&isset($_POST['l2'])&&isset($_POST['l3'])&&isset($_POST['l4'])&&isset($_POST['l5'])&&isset($_POST['l6'])&&isset($_POST['l7'])&&isset($_POST['l8'])&&isset($_POST['l9'])&&isset($_POST['l10'])){
    $tab[0] = $_POST['l1'];
    $tab[1] = $_POST['l2'];
    $tab[2] = $_POST['l3'];
    $tab[3] = $_POST['l4'];
    $tab[4] = $_POST['l5'];
    $tab[5] = $_POST['l6'];
    $tab[6] = $_POST['l7'];
    $tab[7] = $_POST['l8'];
    $tab[8] = $_POST['l9'];
    $tab[9] = $_POST['l10'];
}

if(is_numeric(isset($_POST['dl']))&&is_numeric(isset($_POST['il']))){

}

?>
</body>
</html>
