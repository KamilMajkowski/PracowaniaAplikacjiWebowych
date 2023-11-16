<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>

<h2>Dodaj nową osobę</h2>

<form action="process.php" method="post">
    Nazwisko: <input type="text" name="Nazwisko" required><br>
    Imie: <input type="text" name="Imie" required><br>
    Data: <input type="date" name="Data" required><br>
    <input type="submit" value="Dodaj">
</form>

</body>
</html>
