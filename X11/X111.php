<?php
class osoba
{
    public $id, $nazwisko, $imie,$wiek;
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko=$arg1;
    }
    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
    function wpiszImie($arg2)
    {
        $this->imie=$arg2;
    }
    function pobierzImie()
    {
        return $this ->imie;
    }
    function wpiszId($arg3)
    {
        $this->id=$arg3;
    }
    function pobierzId()
    {
        return $this->id;
    }
    function pobierzWiek(){
        return $this->wiek;
    }
    function wpiszWiek($arg4){
        $this->wiek=$arg4;
    }
}

$postac1= new osoba();
$postac2= new osoba();
$postac1 ->nazwisko='Kowalski';
$postac1->imie='Jan';
$postac1->id=1;
$postac1->wiek = 22;

$postac2->wpiszNazwisko('Nowak');
$postac2->wpiszImie('Adam');
$postac2->wpiszId(2);
$postac2->wpiszWiek(16);

echo $postac1->nazwisko." ".$postac1->imie." ma ".$postac1->wiek." lat";
echo "<br>";
echo $postac2->pobierzNazwisko()." ".$postac2->pobierzImie()." ma ".$postac2->pobierzWiek()." lat";
?>