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
    podaj 10 liter <input type="text" name="al">


<br><br>

długość losowego słowa: <input type="text" name="dl"><br>
ilość słówa: <input type="text" name="il"><br>
    <input type="submit">
</form>
<?php
$tab = array('a','a','a','a','a','a','a','a','a','a');
function wyswietl($tab){
    echo "Twoje litery to: ";
    for($i=0;$i<9;$i++){
        echo $tab[$i].", ";
    }
    echo $tab[9];
}
function wyswietl_slowa($tab){
    $l = $_POST['dl'];
    $words = $_POST['il'];
    for($i=0;$i<$words;$i++){
        for($j=0;$j<$l;$j++){
            echo $tab[rand(0,9)];
        }
        echo " <br>";
    }
}

if(isset($_POST['al'])) {
    $al = $_POST['al'];
    if (strlen($al) == 10)
        for ($i = 0; $i < 10; $i++) {
            $tab[$i] = $al[$i];
        }
}

if(isset($_POST['dl'])&&isset($_POST['il'])){
    if(is_numeric($_POST['dl'])&&is_numeric($_POST['il'])){
        wyswietl($tab);
        echo"<br> Słowa to :<br>";
        wyswietl_slowa($tab);
    }

}

?>
</body>
</html>
