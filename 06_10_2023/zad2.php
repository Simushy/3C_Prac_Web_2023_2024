<?php
$x = 3;
$y = 2;
if ($x % $y == 0) {
    print_r("liczba $x jest podzielna przez $y<br />");
} else {
    print_r("liczba $x jest niepodzielna przez $y<br />");
}

switch ($x % $y) {
    case 0:
        print_r("liczba $x jest podzielna przez $y<br />");
        break;
    default:
        print_r("liczba $x jest niepodzielna przez $y<br />");
}
?>