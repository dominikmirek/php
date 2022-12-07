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
    <h2>Zadanie X092</h2>
<p>Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy. Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a".</p>
</div>

<div class="wynik">
    <?php
    $tab = array("Dominik","Norbert","Ola","Michal");

    function suma($tab){
        $z = 0;
        for ($i = 0;$i<count($tab);$i++){
           $imie = $tab[$i];
           $d = strlen($imie);
           if($imie[$d-1] == 'a') $z++;
        }
        return $z;
    }

    echo suma($tab);

    ?>
</div>

</body>
</html>



