<?php
$x = 150;
if ($x >= 100 && $x < 150) {
    print_r("liczba $x jest w zakresie <100, 150)<br />");
} else {
    print_r("liczba $x nie jest w zakresie <100, 150)<br />");
}

switch ($x >= 100 && $x < 150) {
    case true:
        print_r("liczba $x jest w zakresie <100, 150)<br />");
        break;
    default:
        print_r("liczba $x nie jest w zakresie <100, 150)<br />");
}
?>