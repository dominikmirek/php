<?php
session_start();
if (isset($_SESSION['log'])) {
header('location: log.php');
 exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])){
if ($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan23') {

$_SESSION['log'] = $_POST['nazwa'];
header('location: nowy.php');
exit();
} else {
echo "Nieprawidłowe dane logowania<br>";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <form action="log.php" method="post">
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
