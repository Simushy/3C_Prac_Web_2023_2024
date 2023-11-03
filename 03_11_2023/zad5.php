<?php
$wynik = 100;
if (is_numeric($wynik)) {
    if ($wynik >= 0 && $wynik <= 100) {
        if ($wynik == 100)
            print_r('Celujacy');
        if ($wynik <= 99 && $wynik >= 90)
            print_r('Bardzo dobry');
        if ($wynik <= 89 && $wynik >= 70)
            print_r('Dobry');
        if ($wynik <= 69 && $wynik >= 50)
            print_r('Dostateczny');
        if ($wynik <= 49 && $wynik >= 40)
            print_r('Dopuszczający');
        if ($wynik <= 39 && $wynik >= 0)
            print_r('Niedostateczny');
    }
    else
        print_r('Wynik z poza zakresu <0,100>');
}
else
    print_r('Niepoprawny typ danych');
?>