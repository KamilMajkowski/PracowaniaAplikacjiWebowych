<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator walut</title>
</head>
<body>
    <form method="POST" action="">
<input type="number" name="pl" value="Wpisz kwotę" required>
    <select name="waluta">
        <option value="Euro">EUR</option> 
        <option value="Dolar">DOL</option> 
        <option value="Frank">FRA</option> 
        </select>
<input type="submit" value="Przelicz">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

         $pl = $_POST["pl"];
        $waluta = $_POST["waluta"];

        if($waluta == "Euro"){
            $przelicznik_euro = $pl * 4.32;
            echo "<p>$pl zł to $przelicznik_euro EUR</p>";
         }
        elseif($waluta == "Dolar"){
            $przelicznik_dolar = $pl * 3.31;
            echo "<p>$pl zł to $przelicznik_dolar DOL</p>";
        }
        elseif($waluta == "Frank"){
            $przelicznik_frank = $pl * 3.98;
            echo "<p>$pl zł to $przelicznik_frank FRA</p>";
            }
        }
    ?>
</body>
</html>