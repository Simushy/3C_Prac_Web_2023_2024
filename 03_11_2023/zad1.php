<?php
$liczba = 1.0;
if (is_numeric($liczba)) {
    if ($liczba > 0)
        print_r("$liczba jest większa od 0");
    else if ($liczba < 0)
        print_r("$liczba jest mniejsza od 0");
    else
        print_r("$liczba jest równa 0");
}
else
    print_r('Niepoprawny typ danych');

?>