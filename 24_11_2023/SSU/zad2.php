<?php
$a = 100;
print_r('For:<br/>');
for ($b = 0; $b < 10; $b++) {
    $a -= 1;
    print_r("$a <br/>");
}
$b = 0;
$a = 100;
print_r('<br/>While:<br/>');
while ($b < 10) {
    $a -= 1;
    print_r("$a <br/>");
    $b++;
}
$b = 0;
$a = 100;
print_r('<br/>Do while:<br/>');
do {
    $a -= 1;
    print_r("$a<br/>");
    $b++;
} while ($b < 10)
?>