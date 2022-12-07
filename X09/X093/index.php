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
    <h2>Zadanie X093</h2>

<p>
    Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę zawierającą wszystkie elementy z pierwszej i drugiej tablicy.
</p>
</div>

<div class="wynik">
    <?php
    $tab = array(1,2,3,4,5);
    $tab2 = array(1,2,3,4,5);

    function suma($tab,$tab2){
        $tab3 = array_merge( $tab,$tab2);
        sort($tab3);
        return $tab3;
    }

    var_dump(suma($tab,$tab2));

    ?>
</div>

</body>
</html>



