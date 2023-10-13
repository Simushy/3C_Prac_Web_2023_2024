<?php
$x = 2020;
if ($x % 4 == 0) {
    if ($x % 100 == 0)
        if ($x % 400 == 0)
            print_r('29<br />');
        else
            print_r('28<br />');
        else
            print_r('29<br />');
}
else
    print_r('28<br />');

function check_date($x)
{
    if ($x % 4 == 0) {
        if ($x % 100 == 0)
            if ($x % 400 == 0)
                return 1;
            else
                return 0;
            else
                return 1;
    }
    else
        return 0;
}

switch (check_date($x)) {
    case 1:
        print_r('29<br />');
        break;
    default:
        print_r('28<br />');
}
?>