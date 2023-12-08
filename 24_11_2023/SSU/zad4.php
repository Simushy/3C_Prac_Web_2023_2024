<?php

print_r('For:<br/>');
$a = 1;
for ($i = 0; $i < 10; $i++) {
    $a++;
    $pierwiastek = sqrt($a);
    print_r("$a --> $pierwiastek<br/>");
}
$a = 1;
$i = 0;
print_r('<br/>While:<br/>');
while ($i < 10) {
    $a++;
    $pierwiastek = sqrt($a);
    print_r("$a --> $pierwiastek<br/>");
    $i++;
}
$a = 1;
$i = 0;
print_r('<br/>Do while:<br/>');
do {
    $a++;
    $pierwiastek = sqrt($a);
    print_r("$a --> $pierwiastek<br/>");
    $i++;
} while ($i < 10)

?>