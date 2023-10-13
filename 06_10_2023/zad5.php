<?php
$x = 15;
if ($x < 0) {
    print_r('Nie istniejesz');
    exit ();
}
if ($x < 11)
    print_r('Dziecko<br />');
elseif ($x >= 11 && $x <= 18)
    print_r('Nastolatek<br />');
else
    print_r('Dorosły<br />');

function check_age($x)
{
    if ($x < 11)
        return 1;
    elseif ($x >= 11 && $x < 18)
        return 2;
    else
        return 0;
};
switch (check_age($x)) {
    case 1:
        print_r('Dziecko<br />');
        break;
    case 2:
        print_r('Nastolatek<br />');
        break;
    default:
        print_r('Dorosły<br />');
}

?>