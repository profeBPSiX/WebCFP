<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ?p=login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Secretaria - Centre de Formació</title>
</head>
<body>
    <h1>Àrea de Secretaria</h1>
    <p>Aquesta secció és només per a administradors amb sessió iniciada.</p>
    <a href="benvinguda.php">Tornar a Benvinguda</a><br>
    <a href="logout.php">Tancar sessió</a>
</body>
</html>
