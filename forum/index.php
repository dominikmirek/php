<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="baner">
    <h1>Forum miłośników psów</h1>
</div>
<div class="lewy">
    <img src="Avatar.png" alt="Użytkownik forum">
    <br>
    <h4></h4>
    <?php
        $db = mysqli_connect("localhost","root","","forumpsy");
    $q  = "SELECT konta.nick, konta.postow , pytania.pytanie FROM `konta` INNER JOIN pytania WHERE konta.id = 1 && konta.id = pytania.konta_id;";
    $wynik = mysqli_query($db,$q);
    while ($el = mysqli_fetch_row($wynik)){
        echo "<h4>Użytkownik: ".$el[0]."</h4>";
        echo "<p>".$el[1]." postów na forum </p>";
        echo "<p>".$el[2]."</p><br>";
    }
        mysqli_close($db);
    ?>
    <video controls>
        <source src="video.mp4">
    </video>
</div>
<div class="prawy">
    <form method="POST">
        <input type="textarea" id="pytanie" cols="40" rows="4"><br>
        <input type="submit" value="Dodaj odpowiedź" id="przycisk">
    </form>
    <?php
    if(isset($_POST['pytanie'])) {
        $pytanie = $_POST['pytanie'];
        $db = mysqli_connect("localhost", "root", "", "forumpsy");
        $q = "INSERT INTO pytania VALUES ('','5','$pytanie');";
        $wynik = mysqli_query($db,$q);
        mysqli_close($db);
    }
    ?>
    <h2>Odpowiedz na pytanie</h2>
    <?php
    $db = mysqli_connect("localhost","root","","forumpsy");
    $q = "SELECT odpowiedzi.odpowiedz, konta.nick FROM `odpowiedzi` INNER JOIN konta WHERE odpowiedzi.konta_id = konta.id && Pytania_id = 1;";
    $wynik = mysqli_query($db,$q);
    echo"<ol>";
    while ($el = mysqli_fetch_row($wynik)){
        echo"<li>".$el[0].$el[1]."</li>";
        echo "<hr>";
    }
    echo"</ol>";
    mysqli_close($db);
    ?>
</div>
<div class="stopka">
    Autor: 000000000 <a href="http://mojestrony.pl/">Zobacz nasze realizacje</a>
</div>
</body>
</html>
