<?php
$bok_a = 4;
$bok_b = 4;
$bok_c = 4;

function jaki_trojkat($a, $b, $c)
{
    $a_2 = $a * $a;
    $b_2 = $b * $b;
    $c_2 = $c * $c;
    if ($a == $b && $a == $c)
        return 'rownoboczny';
    else if (($a_2 + $b_2 == $c_2) || ($a_2 + $c_2 == $b_2) || ($c_2 + $b_2 == $a_2)) {
        if ($a == $b || $a == $c || $b == $c)
            return 'prostokatny rownoramienny';
        else
            return 'prostokatny';
    }
    else if ($a == $b || $a == $c || $b == $c)
        return 'rownoramienny';

    else
        return 'inny';
}

function sprawdz_prostokatny($a, $b, $c) {}

if (is_numeric($bok_a) && is_numeric($bok_b) && is_numeric($bok_c)) {
    if ($bok_a <= 0 || $bok_b <= 0 || $bok_c <= 0)
        exit ('Żaden bok nie może być równy lub mniejszy 0');
    else {
        $trojkat = jaki_trojkat($bok_a, $bok_b, $bok_c);
        print_r("Trojkat jest $trojkat");
    }
}
else
    print_r('Niepoprawny typ danych');
?>