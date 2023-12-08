<!doctype html>
<html lang="pl">
  <head>
    <title>Obliczenia</title>
  </head>
  <body style="background-color: black; color: white;text-align:center;margin-top:50px;">
    <?php
        $a = 10;
        $licznik = 0;
        $suma = 0;
        while (true) {
            $a++;
            if ($suma + $a > 1000)
                break;
            else {
                $suma += $a;
                $licznik++;
            }
        }
        print_r("Po zsumowaniu $licznik liczb większych od 10 suma nie przekraczająca 1000 wynosi $suma");
    ?>
  </body>
</html>
