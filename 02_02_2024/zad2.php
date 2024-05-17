<style>
    * {background-color: rgb(45,45,45);
        color:white;}
    input{border: 1px solid white;}
    body{margin-top:3%;}
    #center{ display: flex;
  justify-content: center;
  flex-direction: column;
text-align:center;}
table{width:35%;
text-align:center;
margin-left: auto;
  margin-right: auto;}
tr, td {border:1px solid white;}

</style>
<div id=center>
<form method="POST">
 User <br/><input type="text" name="user"></input><br/>
 Pass <br/><input type="password" name="pass" style="margin-left:2px;margin-top:5px;"></input><br/>
 <input type="submit" name="submit" value="Go"></input><br/>
 </form>
 <br/>
 <table>
    <tr>
        <td>ID</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Rok urodzenia</td>
        <td>Miejsce urodzenia</td>
    </tr>
<?php

if (isset($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $host = 'localhost';
    $db = 'baza_filmow';
    $polaczenie = mysqli_connect($host, $user, $pass, $db);
    $zapytanie = 'SELECT * FROM klienci';
    $wynik = mysqli_query($polaczenie, $zapytanie);
    while ($row = mysqli_fetch_row($wynik)) {
        echo '<tr>';
        echo "<td>$row[0]</td>";  // #row['id']
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo '</tr>';
    }
}
?>
</table>
</div>