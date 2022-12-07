<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" ">
</head>
<body>
<div class="intro">
    <h1>Dominik Mirek</h1>
    <h2>Zadanie X091</h2>
<p>Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch najmniejszych liczb zapisanych w tablicy.</p>
</div>

<div class="wynik">
    <?php
    $tab = array(3,5,3,1,2);

    function suma($tab){
        sort($tab);
        return$tab[0]+$tab[1];
    }


    echo suma($tab);

    ?>
</div>

</body>
</html>



