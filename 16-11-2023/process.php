<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "klasa";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$imie = $_POST["Nazwisko"];
$nazwisko = $_POST["Imie"];
$Data = $_POST["Data"];


$sql = "INSERT INTO klasa (Nazwisko, Imie, Data_urodzin) VALUES ('$imie', '$nazwisko', $Data)";
?>
</body>
</html>