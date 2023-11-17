<!doctype html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <title>Przelicznik walut</title>
  </head>
  
  <body style="margin-left: 5%; margin-top: 5%">
    <form method="post">
    <h1>Podaj jezyk</h1>
    <input type="radio" value="a" name="jezyk" id="jezyk" />Angielski<br />
    <input type="radio" value="n" name="jezyk" id="jezyk" />Niemiecki<br />
    <input type="radio" value="h" name="jezyk" id="jezyk" />Hiszpanski<br /><br />
    <input type="submit" name="submit" /><br/><br/>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $jezyk = $_POST['jezyk'];
            if ($jezyk == 'a') {
                echo 'Angielski';
            } else if ($jezyk == 'n') {
                echo 'Niemiecki';
            } else if ($jezyk == 'h') {
                echo 'Hiszpanski';
            } else {
                echo 'Polski';
            }
        }
    ?>
  </body>
  
</html>
