<?php
$x = 20;
if ($x > 0)
    print_r("liczba $x jest większa od 0<br />");
elseif ($x < 0)
    print_r("liczba $x jest mniejsza od 0<br />");
else
    print_r("liczba $x jest równa 0<br />");

function check_variable($x)
{
    if ($x > 0)
        return 1;
    elseif ($x < 0)
        return 2;
    else
        return 0;
};
switch (check_variable($x)) {
    case 1:
        print_r("liczba $x jest większa od 0<br />");
        break;
    case 2:
        print_r("liczba $x jest mniejsza od 0<br />");
        break;
    default:
        print_r("liczba $x jest równa 0<br />");
}

?>