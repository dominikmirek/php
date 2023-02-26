<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autor</title>
</head>
<body>

<form method="POST">
    Imie: <input type="text" name="imie"><br>
    Nazwosko: <input type="text" name="nazwisko">
    <input type="submit" name="dodaj" value="Dodaj autora"><br>
</form>
<?php

class Baza{
    protected $host;
    protected $user;
    protected $pwd;
    protected $dbName;
    protected $dbLink;
    protected $result;

    function __construct($host, $user, $pwd, $dbName){
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbName = $dbName;
        $this->connect();
    }
    public function connect() {
        try {
            $this->dbLink = @mysqli_connect($this->host, $this->user, $this->pwd, $this->dbName);
            if (!$this->dbLink) {
                throw new Exception ("Nie można było połączyć użytkownika $this->user z bazą $this->dbName");
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
        return $this->dbLink;
    }
    public function query() {
        if(isset($_POST['imie'])&& isset($_POST['nazwisko'])){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $q = "INSERT INTO autorzy VALUES ('','$imie','$nazwisko')";
            mysqli_query($this->dbLink, $q);
        }
        }
    public function close(){
        mysqli_close($this->dbLink);
    }
}


$autor = new Baza('localhost', 'root', '', '3pir2_bibloteka');
if(isset($_POST['dodaj'])){
    $autor ->query();
}
$autor ->close();
?>

</body>
</html>
