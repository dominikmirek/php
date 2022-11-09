<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Zamówienia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tabela">
    <?php
    $paczkow =  $_POST['paczek'];
    $grzebieni =  $_POST['grzebien'];
    $suma = 0.99*$paczkow + 1.29*$grzebieni;
echo<<<END

<h2>Podsumowanie zamówienia</h2>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <td>Pączek (0.99PLN/szt)</td> <td>$paczkow</td>
</tr>
<tr>
    <td>Grzebieni (1.29PLN/szt)</td> <td>$grzebieni</td>
</tr>
<tr>
    <td>SUMA</td><td>$suma</td>
</tr>
</table>  
END;   
    ?>
    
    </div>

</body>
</html>