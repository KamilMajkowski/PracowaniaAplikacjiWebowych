<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wynik</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $odleglosc = $_POST["odleglosc"];
        $ciepla = isset($_POST["ciepla"]);

        // Oblicz koszt dowozu
        $koszt = $odleglosc * 50; // Koszt podstawowy (50 groszy za km)

        if ($ciepla) {
            $koszt += $koszt * 0.15; // Dodatkowe 15% za ciepłą pizzę
        }

        echo "<p>Odległość: $odleglosc km</p>";
        echo "<p>Ciepła pizza: " . ($ciepla ? "Tak" : "Nie") . "</p>";
        echo "<p>Koszt dowozu: " . number_format($koszt / 100, 2) . " PLN</p>";
    }
    ?>
</body>
</html>
