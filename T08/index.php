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
    <h2>Zadanie T08</h2>
    <p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>
</div>
<form method="POST" action="index.php">
    podaj a (minimalna wartość)<br>   <input type="text" name="a"><br>
    podaj b (maksymalna wartość) <br>  <input type="text" name="b"><br><br>

    <input type="submit" value="Wyślij">
</form>
<div class="wynik">
    <?php


    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $jeden = rand($a, $b);
        $dwa = rand($a, $b);


        if ($jeden > $dwa) {
            echo "$jeden > $dwa";
        } else if ($jeden < $dwa) {
            echo "$jeden < $dwa";
        } else echo "$jeden == $dwa";
    }

    ?>
</div>

</body>
</html>
