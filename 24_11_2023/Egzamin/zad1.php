<!doctype html>
<html lang="pl">
  <head>
    <title>Obliczenia</title>
  </head>
  <body style="background-color: black; color: white;text-align:center;margin-top:50px;">
  <a>Suma 100 parzystych liczb następujących po 100 wynosi:</a>
    <?php $a = 100;
    $licznik = 0;
    $suma = 0;
    while ($licznik < 100) {
      $a++;
      if ($a % 2 == 0) {
        $licznik++;
        $suma += $a;
      }
    }
    print_r($suma); ?>
  </body>
</html>
