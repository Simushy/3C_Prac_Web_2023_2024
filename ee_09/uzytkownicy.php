<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css" />
  </head>
  <body>
    <div class="banner_wrapper">
      <section id="banner_lewy" class="banner"><h2>Nasze osiedle</h2></section>

      <section id="banner_prawy" class="banner">
        <?php
          $sql = 'SELECT COUNT(id) FROM dane;';
          $connection = mysqli_connect('localhost', 'ruut', '', 'portal');
          print_r('Liczba użytkowników portalu: ' . mysqli_fetch_row(mysqli_query($connection, $sql))[0]);
          mysqli_close($connection);
        ?>
      </section>
    </div>
    <div class="main_wrapper">
      <section id="main_lewy" class="main">
        <h3>Logowanie</h3>
        <br />
        <form method="post">
          <a>login</a><br />
          <input type="text" name="login" /><br />
          <a>hasło</a><br />
          <input type="password" name="password" /><br />
          <button type="submit" name="submit">Zaloguj</button>
        </form>
      </section>

      <section id="main_prawy" class="main">
        <h3>Wizytówka</h3>
        <br />
        <div id="wizytowka"><?php

function checkLogin($connection, $login)
{
  for ($i = 0; $i <= mysqli_fetch_row(mysqli_query($connection, 'SELECT COUNT(id) FROM dane;'))[0]; $i++) {
    if ($login == mysqli_fetch_row(mysqli_query($connection, 'SELECT `uzytkownicy`.`login` FROM `uzytkownicy` WHERE `uzytkownicy`.`id` =' . $i . ';'))[0]) {
      return true;
      break;
    }
  }
  return false;
}

function checkPassword($connection, $password)
{
  for ($i = 0; $i <= mysqli_fetch_row(mysqli_query($connection, 'SELECT COUNT(id) FROM dane;'))[0]; $i++) {
    if ($password == mysqli_fetch_row(mysqli_query($connection, 'SELECT `uzytkownicy`.`haslo` FROM `uzytkownicy` WHERE `uzytkownicy`.`id` =' . $i . ';'))[0]) {
      return true;
      break;
    }
  }
  return false;
}

if (isset($_POST['submit'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  if ($login != '' && $password != '') {
    $password = sha1($password);
    $connection = mysqli_connect('localhost', 'ruut', '', 'portal');
    if (checkLogin($connection, $login) == false) {
      print_r('login nie istnieje');
    } else if (checkPassword($connection, $password) == false) {
      print_r('haslo nieprawidlowe');
    } else {
      $sql = 'SELECT `dane`.`rok_urodz`, `dane`.`przyjaciol`, `dane`.`hobby`, `dane`.`zdjecie` from dane, uzytkownicy where `dane`.`id` = `uzytkownicy`.`id` and `uzytkownicy`.`login` like "' . $login . '";';
      $info = mysqli_fetch_array(mysqli_query($connection, $sql));
      print_r('<img src="' . $info['zdjecie'] . '" alt="osoba"><br/>');
      print_r('<h4>' . $login . ' (' . date('Y') - $info['rok_urodz'] . ')</h4>');
      print_r('<p>Hobby: ' . $info['hobby']);
      print_r('<h1><img src="icon-on.png"> ' . $info['przyjaciol'] . '</h1>');
      print_r('<a href="dane.html" id="wiecej"><div id="wiecejdiv">Więcej informacji</div></a>');
      mysqli_close($connection);
    }
  }
}
?></div>
      </section>
    </div>
    <section id="stopka">Stronę wykonał 00000000000</section>
  </body>
</html>

