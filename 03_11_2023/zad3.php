<?php
$kategorie = ['elektronika', 'odzież', 'pieczywo'];
$kategoria_produktu = $kategorie[2];
$cena_produktu = 20.19;
$cena_opodatkowana = $cena_produktu;
if (is_numeric($cena_produktu) && $cena_produktu > 0) {
    switch ($kategoria_produktu) {
        case $kategorie[0]:
            $podatek = 0.23;
            $cena_opodatkowana += round($cena_produktu * $podatek, 2);
            break;
        case $kategorie[1]:
            $podatek = 0.12;
            $cena_opodatkowana += round($cena_produktu * $podatek, 2);
            break;
        case $kategorie[2]:
            $podatek = 0.58;
            $cena_opodatkowana += round($cena_produktu * $podatek, 2);
            break;
        default:
            exit ('Niepoprawna kategoria');
    }
    print_r('Produkt o kosztujący ' . number_format($cena_produktu, 2) . " w kategorii $kategoria_produktu po doliczeniu podatku będzie kosztować " . number_format($cena_opodatkowana, 2));
}
else
    print_r('Niepoprawny typ danych');
?>