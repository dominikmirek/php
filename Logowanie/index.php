<?php
session_start();
if (!isset($_SESSION['logowanie'])) {
    header('location: logowanie.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Strona główna</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$imie = ucfirst($_SESSION['logowanie']);
echo "Witaj " . $imie;
?>
<p>Jesteś na stronie głównej.</p>
<a href="wyloguj.php">Wyloguj</a>
</body>
</html>