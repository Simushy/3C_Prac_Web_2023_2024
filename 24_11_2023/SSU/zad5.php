<?php
$a = -90;
$b = 90;
$dokladnosc = 0.0000000000001;
$srodek;

function f($x)
{
    return $x * $x * $x + 10;
}

function miejsce_zerowe($a, $b, $dokladnosc)
{
    if (f($a) == 0)
        return $a;
    if (f($b) == 0)
        return $b;
    while ($b - $a > $dokladnosc) {
        $srodek = ($a + $b) / 2;
        if (f($srodek) == 0)
            return $srodek;
        if (f($a) * f($srodek) < 0)
            $b = $srodek;
        else
            $a = $srodek;
    }
    return ($a + $b) / 2;
}

$x0 = round(miejsce_zerowe($a, $b, $dokladnosc), 14);
print_r("Funkcja ma miejsce zerowe $x0");
?>