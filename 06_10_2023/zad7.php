<?php
$x = 4;
$y = 3;
$z = 5;
$tmp = $x;
if ($y > $tmp)
    $tmp = $y;
if ($z > $tmp)
    $tmp = $z;
print_r("$tmp jest największa<br/>");

$tmp = $x;
switch ($tmp) {
    case ($y > $tmp == true):
        $tmp = $y;
        break;
    case ($z > $tmp == true):
        $tmp = $z;
        break;
}
print_r("$tmp jest największa<br/>");
?>
