<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Benvinguda - Centre de Formació</title>
</head>
<body>
    <h1>Benvinguts, <?php echo $_SESSION['admin']; ?>!</h1>
    <p>Aquesta és la pàgina de benvinguda interna.</p>
    <a href="secretaria.php">Anar a Secretaria</a><br>
    <a href="logout.php">Tancar sessió</a>
</body>
</html>
