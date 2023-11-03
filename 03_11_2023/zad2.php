<?php
$liczba = '1';
if (is_numeric($liczba)) {
    if ($liczba == 0) {
        print_r('Liczba nie może być zerem!');
    }
    else if ($liczba % 2 == 0)
        print_r("liczba $liczba jest parzysta");
    else
        print_r("liczba $liczba jest nieparzysta");
}
else
    print_r('Niepoprawny typ danych')
    ?>