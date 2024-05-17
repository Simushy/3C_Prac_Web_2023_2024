<style>
    * {background-color: rgb(45,45,45);
        color:white;}
    input{border: 1px solid white;}
    body{text-align:center;margin-top:3%;}

</style>
<form method="POST">
 User <br/><input type="text" name="user"></input><br/>
 Pass <br/><input type="password" name="pass" style="margin-left:2px;margin-top:5px;"></input><br/>
 <input type="submit" name="submit" value="Go"></input>
 </form>
<?php

if (isset($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $host = 'localhost';
    $db = 'baza_filmow';
    $polaczenie = mysqli_connect($host, $user, $pass, $db);
    $zapytanie = 'SELECT * FROM filmy';
    $wynik = mysqli_query($polaczenie, $zapytanie);
    while ($wiersz_danych = mysqli_fetch_row($wynik)) {
        for ($i = 0; $i < count($wiersz_danych); $i++)
            print $wiersz_danych[$i] . ' ';
        print '<br/>';
    }
}
