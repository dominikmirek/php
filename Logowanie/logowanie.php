<?php
session_start();
if(isset($_SESSION['logowanie'])){
    header('location: logowanie.php');
    exit();
}
else if(isset($_POST['nazwa']) && isset($_POST['haslo'])){

    if ($_POST['nazwa'] == 'dominik' && $_POST['haslo'] == 'admin'){
        $_SESSION['logowanie'] = $_POST['nazwa'];
        header('location: index.php');
        exit();
    }
    else{
        echo "Nie prawidłowe dane";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Logowanie</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <form action="logowanie.php" method="POST">
        <p id="log">Logowanie</p>
        <p class="fo">Nazwa użytkownika:</p>
        <input type="text" name="nazwa" value="" size="25"><br>
        <p class="fo">Hasło:</p>
        <input type="password" name="haslo" value="" size="25">
        <input type="submit" value="Zaloguj się">
    </form>
</div>
</body>
</html>
