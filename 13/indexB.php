<?php
if (!isset($_COOKIE['dane']) && !isset($_POST['nazw'])&& !isset($_POST['uro'])) {
?>
<!doctype html>
<html>
<head>
    <title>Dane_user</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="indexB.php" method="POST">
    Podaj nazwisko i imię:<br>
    <input type="text" name="nazw" value=" " size="35"><br>
    Podaj date urodzenia bez roku:<br>
    <input type="date" name="uro" value=" " size="35">
    <p><input type="submit" value="Wyślij" name="wyslij"></p>
</form>
<?php
}else {
if (isset($_POST['nazw'])&& isset($_POST['uro'])) {
setcookie('dane', $_POST['nazw'], time()+60*60*24*365);
setcookie('uro', $_POST['uro'], time()+60*60*24*365);
echo "<p>Dziękujemy za wprowadzenie danych.</p>";
 } else {
    $birthday = new DateTime($_COOKIE['uro']);
    $today = new DateTime();
    $interval = $birthday->diff($today);
    $days =$interval->days;
    echo "<p>Witamy po raz kolejny! " . $_COOKIE['dane']  ." do Twoich urodzin pozostało jeszcze ". $days." dni"."</p>";
 }
}
?>
</body>
</html>