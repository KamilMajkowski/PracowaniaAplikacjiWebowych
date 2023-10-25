<?php
$newUsername = "Username";
setcookie("username", $newUsername, time() + 3600, "/");
echo "Wartość pliku cookie 'username' została zmieniona na: " . $newUsername;
?>
