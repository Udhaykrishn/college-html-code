<?php

$rows = 5;

for ($i = $rows; $i >= 1; $i--) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}

?>