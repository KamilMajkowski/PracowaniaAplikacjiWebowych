<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOWANIE</title>
</head>
<body>
<?php
// Połączenie z bazą danych
$pdo = new PDO('mysql:host=localhost;dbname=baza', 'twoj_login', 'twoje_haslo');

// Pobierz dane z formularza
$username = $_POST['username'];
$password = $_POST['password'];

// Zabezpiecz hasło (np. skorzystaj z funkcji hashowania)
$hashedPassword = hash('sha256', $password);

// Zapytanie do bazy danych
$query = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$query->execute([$username, $hashedPassword]);
$user = $query->fetch();

if ($user) {
    echo "Zalogowano pomyślnie!";
} else {
    echo "Błąd logowania. Spróbuj ponownie.";
}
?>
</body>
</html>