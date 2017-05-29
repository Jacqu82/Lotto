<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Lotto</title>
</head>
<body>
<form action="lotto.php" method="POST">
    <?php
    $j = 0;
    for ($i = 1; $i <= 49; $i++) {
        echo "<input type='checkbox' name='number[]' value='$i'>$i";
        if (($j == 6) || ($j == 12) || ($j == 18) || ($j == 24) || ($j == 30) || ($j == 36) || ($j == 42) || ($j == 48)) {
            echo "<br/>";
        }
        $j++;
    }
    echo "<br/>";
    ?>
    <input type="submit" value="Losuj">
</form>
</body>
</html>