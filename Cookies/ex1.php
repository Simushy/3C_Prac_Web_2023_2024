<?php
setcookie('Imie', 'Aleksander', time() + 3600, '/');
setcookie('Nazwisko', 'Bis', time() + 3600, '/');
setcookie('Username', 'Olek123', time() + 3600, '/');

echo $_COOKIE['Username'];
setcookie('Username', 'Olek321', time() + 3600, '/');
setcookie('Username', '', time() - 3600, '/');

if (!isset($_COOKIE['hits'])) {
    $ile = 1;
} else {
    $ile = (int) $_COOKIE['hits'];
    if ($ile < 1)
        $ile = 1;
    $ile++;
}
setcookie('hits', "$ile");
?>
<html>
<body>
    <p>
        <?php
            if ($ile == 10) {
                echo 'zajebiscie tak trzymaj';
            }
        ?>
    </p>
    <form method="post">
        <a>Podaj date urodzin</a>
        <input type="date" name="data"><br/>
        <input type="submit" name="submit" /></br>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $data = $_POST['data'];
            if (!isset($_COOKIE['data'])) {
                setcookie('data', $data, time() + 3600, '/');
            }
            if ($_COOKIE['data'] == $data) {
                echo 'Wszystkiego najlepszego';
            }
        }
    ?>
</body>
</html>
