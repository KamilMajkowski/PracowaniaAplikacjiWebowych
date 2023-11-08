<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mniejsza większa</title>
</head>
<body>
<?php
    $a = 57;
    $b = -12;
    if ($a < $b) {
        echo "$a jest mniejsze od $b";
    } elseif ($a == $b) {
        echo "$a jest równe $b";
    } else {
        echo "$a jest większe od $b";
    }
    ?>
</body>
</html>