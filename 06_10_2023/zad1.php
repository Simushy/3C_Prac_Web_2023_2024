<?php
$x = 3;
if ($x % 2 == 0) {
    print_r("liczba $x jest parzysta<br />");
} else {
    print_r("liczba $x jest nieparzysta<br />");
}

switch ($x % 2) {
    case 0:
        print_r("liczba $x jest parzysta<br />");
        break;
    default:
        print_r("liczba $x jest nieparzysta<br />");
}
?>