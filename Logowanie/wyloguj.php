<?php
session_start();
if (isset($_SESSION['logowanie'])){
    unset($_SESSION['logowanie']);
}
else{
    header('location:logowanie.php');
    exit();
}
$s = session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wylogowano</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p>Wylogowałeś się ze strony.</p>
<a href="logowanie.php">Logowanie</a
</body>
</html>
