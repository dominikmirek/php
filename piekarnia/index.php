<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Zamówienie online</h1>
    <form action="order.php" method="post">
        Ile pączków (0.99PLN/szt):
        <input type="number" name="paczek">
        <br>
        Ile grzebieni (1.29PLN/szt):
        <input type="text" name="grzebien">
        <br>
        <input type="submit" value="Wyślij zamówenie ">
    </form>

</body>
</html>