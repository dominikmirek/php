<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="baner">
    <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
</div>
<div class="bl">
    <h3>Promocja 15% obejmuje artykuły:</h3>
    <?php
    $db = mysqli_connect("localhost", "root","","3pir_2_sklep");
    mysqli_set_charset($db,"utf8");
    $q="SELECT nazwa FROM towary WHERE promocja=1;";
    $wynik = mysqli_query($db,$q);
    while ($el = mysqli_fetch_row($wynik)){
        echo "<ul>";
        echo"<li>$el[0]</li>";
        echo "</ul>";
    }
    mysqli_close($db);
    ?>
</div>
<div class="bs">
    <h3>Cena wybranego artykułu w promocji</h3>
    <form method="POST">
        <select name="wyb[]">
            <option >gumka do mazania</option>
            <option >cienkopis</option>
            <option >pisaki 60 szt.</option>
            <option >markary 60 szt.</option>
        </select>
        <input type="submit" value="WYBIERZ">
    </form>
    <?php
    $object = '';
    foreach ($_POST['wyb'] as $wartosc) {
        $object =$wartosc;
    }
    $db=mysqli_connect("localhost","root","","3pir_2_sklep");
    $q="SELECT cena FROM towary WHERE nazwa='$object';";
    $wynik =mysqli_query($db,$q);
    while ($el=mysqli_fetch_row($wynik)){
        $pro = 0.85*$el[0];
        round($pro,2);
        echo $pro;
    }
    ?>
</div>
<div class="bp">
    <h3>Kontakt</h3>
    <p>telefon: 123123123 </p><p>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a> </p>
    <img src="promocja2.png" alt="promocja">
</div>
<div class="footer">
    <h4>Autor strony: 00000000000</h4>
</div>
</body>
</html>
