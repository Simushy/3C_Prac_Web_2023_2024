<?php
print_r('For:<br/>');
for ($a = 100; $licznik < 5; $a++) {
    if ($a % 5 == 0 && $a != 100) {
        $licznik++;
        print_r("$a<br/>");
    }
    else
        continue;
}
print_r('<br/>While:<br/>');
$a = 100;
$licznik = 0;
while ($licznik < 5) {
    if ($a % 5 == 0 && $a != 100) {
        $licznik++;
        print_r("$a<br/>");
    }
    $a++;
}
print_r('<br/>Do while:<br/>');
$a = 100;
$licznik = 0;
do {
    if ($a % 5 == 0 && $a != 100) {
        $licznik++;
        print_r("$a<br/>");
    }
    $a++;
} while ($licznik < 5)

?>
