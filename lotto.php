<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['number'])) {
        $array2 = $_POST['number'];
    }
}
$array1 = [];
$array1 = range(1, 49);
shuffle($array1);
$array = array_slice($array1, 0, 6);
sort($array);

echo "Twoje Wybrane liczby: <br/>";
foreach ($array2 as $key) {
    echo $key . " ";
}
echo "<br/>Twoje wylosowane liczby: <br/>";
foreach ($array as $key) {
    echo $key . " ";
}
echo "<br/>Poprawnie wytypowane liczby: ";
$counter = 0;
foreach ($array2 as $item) {
    foreach ($array as $value) {
        if ($item == $value) {
            echo $item . " ";
            $counter++;
        }
    }
}
echo "<br/>";
if ($counter == 6) {
    echo "Brawo! Wytypowałeś poprawnie 6 liczb!";
} else if ($counter == 5) {
    echo "Wytypowałeś poprawnie 5 liczb!";
} else if ($counter == 4) {
    echo "Wytypowałeś poprawnie 4 liczby!";
} else if ($counter == 3) {
    echo "Wytypowałeś poprawnie 3 liczby!";
} else if ($counter == 2) {
    echo "Wytypowałeś poprawnie 2 liczby!";
} else if ($counter == 1) {
    echo "Wytypowałeś poprawnie 1 liczbę!";
} else if ($counter == 0) {
    echo "Niestety! 0 trafień :(";
}

echo "<p><a href='index.php'>Wybierz nowe liczby</a></p>";
