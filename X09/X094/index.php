<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" ">
</head>
<body>
<div class="intro">
    <h1>Dominik Mirek</h1>
    <h2>Zadanie X093</h2>

    <p>
        Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej dacie.
    </p>
</div>

<div class="wynik">
    <?php
    $tab = array(1,2,3,4,5);
    $tab2 = array(1,2,3,4,5);

    function datasprawsz($dd,$mm,$yy){
        if($dd<=31 && $mm<=12){
            if(!checkdate($mm,$dd,$yy)){
                return"Błędna data";
            }
            else{
                if(date("y") > $yy){
                    return"historia";
                }
                else if(date("y")==$yy){

                    if (date("m") > $mm){
                        return"historia";
                    }
                    else if(date("m") ==$mm){

                        if (date("d") > $dd){
                            return"historia";
                        }
                        else return "teraźniejszość lub przyszłość";

                    }
                    else return "teraźniejszość lub przyszłość";

                }
                else return "teraźniejszość lub przyszłość";
            }
        }
        return "Błędna data";
    }


    echo datasprawsz(22,05,2021);
    ?>


</div>

</body>
</html>




