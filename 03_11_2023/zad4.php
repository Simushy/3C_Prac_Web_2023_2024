<?php
function czy_przestepny($rok)
{
    if ($rok % 4 == 0) {
        if ($rok % 100 == 0) {
            if ($rok % 400 == 0)
                return true;
            else
                return false;
        }
        else
            return true;
    }
    else
        return false;
}

$rok = 1601;
if (is_numeric($rok)) {
    if ($rok > 0) {
        if (czy_przestepny($rok))
            print_r("Rok $rok jest przestępny<br/>");
        else
            print_r("Rok $rok nie jest przestępny<br/>");
        $stulecie = ceil($rok / 100);
        print_r("Rok $rok należy do $stulecie stulecia");
    }
    else
        print_r('Rok musi być większy od 0');
}
else
    print_r('Niepoprawny typ danych');

?>