<?php

$i = 1;

do {
    $number = $i * 10;
    $sqrt = sqrt($number);
    echo "$number - Pierwiastek: $sqrt<br>";
    $i++;
} while ($i <= 10);

?>