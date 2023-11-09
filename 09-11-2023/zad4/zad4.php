<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$i = 1;

do {
    $number = $i * 10;
    $sqrt = sqrt($number);
    echo "$number - Pierwiastek: $sqrt<br>";
    $i++;
} while ($i <= 10);

?>
</body>
</html>