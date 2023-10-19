<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Wynik</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $koszt_benzyny = $_POST["koszt_benzyny"];
        $odleglosc = $_POST["odleglosc"];
        $spalanie = $_POST["spalanie"];

        // Sprawdź, czy przesłane dane są liczbami zmiennoprzecinkowymi
        if (is_numeric($koszt_benzyny) && is_numeric($odleglosc) && is_numeric($spalanie)) {
            // Oblicz koszt przejazdu
            $koszt_przejazdu = ($odleglosc / 100) * $spalanie * $koszt_benzyny;

            echo "<p>Przesłane dane:</p>";
            echo "<ul>";
            echo "<li>Koszt benzyny: $koszt_benzyny PLN/l</li>";
            echo "<li>Ilość kilometrów: $odleglosc km</li>";
            echo "<li>Średnie spalanie: $spalanie l/100km</li>";
            echo "</ul>";
            echo "<p>Koszt przejazdu wynosi: $koszt_przejazdu PLN</p>";
        } else {
            echo "Podane dane są niepoprawne. Proszę wprowadzić poprawne liczby zmiennoprzecinkowe.";
        }
    }
    ?>
</body>
</html>
