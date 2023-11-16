<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = " 127.0.0.1 ";
    $username = "root";
    $password = "root";
    $database = "PracowaniaAplikacjiWebowych";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connes_error) {
        die("Connestion failed: " . $conn->connes_error);
    } else {
        echo "Connected successfuly";
    }

    $conn->close();
?>
</body>
</html>