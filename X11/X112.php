<?php
class czolg{
    public $nazwa, $kolor, $ilosc_aunicji;
    function info(){
        echo "Nazwa: ".$this->nazwa."<br>";
        echo "Kolor: ".$this->kolor."<br>";
        echo "Ilość amuniji: ".$this->ilosc_aunicji."<br>";
    }
    function pomaluj($k){
        $this ->kolor = $k;
    }
    function zaladuj($a){
        $this -> ilosc_aunicji = $a;
    }
    function strzelaj(){
        if ($this->ilosc_aunicji>0){
            echo "Strzał"."<br>";
            $this->ilosc_aunicji--;
        }
        else {
            echo "Nie wystraczjąca ilość amunicji do strzału"."<br>";
        }
    }
}

$tygrys = new czolg();
$tygrys ->nazwa = "Rudy";
$tygrys ->kolor = "Czerwony";
$tygrys ->ilosc_aunicji = 0;
$tygrys ->info();
echo "<br>";
$tygrys ->pomaluj("Zielony");
$tygrys ->strzelaj();
$tygrys ->zaladuj(4);
$tygrys ->strzelaj();
echo "<br>";
$tygrys ->info();


?>