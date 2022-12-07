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
        Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej przez funkcję getdate() wyświetli bieżącą datę. W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.
    </p>
</div>

<div class="wynik">
    <?php
    $tab = getdate();

 function mies($tab){
     switch ($tab["mon"]) {
         case 1:
             return "Styczen";
         case 2:
             return "Luty";
         case 3:
             return "Marzec";
         case 4:
             return "Kwiecien";
         case 5:
             return "Maj";
         case 6:
             return "Czerwiec";
         case 7:
             return "Lipiec";
         case 8:
             return "Sierpień";
         case 9:
             return "Wrzesień";
         case 10:
             return "Pażdziernik";
         case 11:
             return "Listopad";
         case 12:
             return "Grzudzień";
     }

 }


    echo $tab["mday"];
 echo " ";
   echo mies($tab);
    echo " ";
    echo $tab["year"];

    ?>
</div>

</body>
</html>




