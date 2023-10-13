<?php
$x = 2;
$y = 3;
$z = 2;
if ($x == $y || $x == $z || $y == $z)
    print_r('Tak<br/>');
else
    print_r('Nie<br/>');

function check_equality($x, $y, $z)
{
    if ($x == $y || $x == $z || $y == $z)
        return 1;
    else
        return 0;
}

switch (check_equality($x, $y, $z)) {
    case 1:
        print_r('Tak<br/>');
        break;
    default:
        print_r('Nie<br/>');
}
?>