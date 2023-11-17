<!doctype html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <title>Przelicznik walut</title>
  </head>
  
  <body style="margin-left: 5%; margin-top: 5%">
    <form method="post">
    <h1>Podaj kwote do przeliczenia</h1>
    <input type="value" id="kwota" name="kwota" /><br /><br />
    <h1>Podaj walute na którą chcesz przeliczyć</h1>
    <input type="radio" value="euro" name="waluta" id="waluta" />euro<br />
    <input type="radio" value="dolary" name="waluta" id="waluta" />dolary<br />
    <input type="radio" value="franki" name="waluta" id="waluta" />franki<br /><br />
    <input type="submit" name="submit" /><br/><br/>
    </form>
    <?php
      if (isset($_POST['submit'])) {
        $pl = $_POST['kwota'];
        $waluta = $_POST['waluta'];
        if (is_numeric($pl)) {
          $pl = round($_POST['kwota'], 2);
          switch ($waluta) {
            case 'euro':
              {
                $wynik = round($pl * 4.32, 2);
                break;
              }
            case 'dolary':
              {
                $wynik = round($pl * 3.21, 2);
                break;
              }
            case 'franki':
              {
                $wynik = round($pl * 3.98, 2);
                break;
              }
            default:
              {
                print_r('Zaznacz walutę na którą przeliczyć!');
                exit;
              }
          }

          print_r("$pl w przeliczeniu na $waluta to $wynik");
        } else {
          print_r('Podaj poprawną kwotę');
        }
      };
    ?>
  </body>
  
</html>
