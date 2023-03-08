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

<form method="post">
    Imię: <input type="text" name="imie"> <br>
    Nazwisko: <input type="text" name="nazwisko"> <br>
    <input type="submit" value="DODAJ">
</form>

<?php
if (isset($_POST['imie']) && isset($_POST['nazwisko'])){

    $user = "root";
    $pass = "";
    $dsn = "mysql:host=localhost;dbname=3pir2_biblioteka";

    try{
        $pdo = new PDO($dsn, $user, $pass);

        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $zapytanie = $pdo->exec("INSERT INTO autorzy VALUES (null, '$imie', '$nazwisko');");

        if ($zapytanie > 0){
            echo "Udało sie";
        }
        else{
            echo "Błąd podczas dodawania";
        }

        $pdo = null;
    } catch (PDOException $e){
        echo "błąd połączenia: " . $e->getMessage();
        exit;
    }
}
?>
</body>
</html>