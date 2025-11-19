<?php
session_start();

<<<<<<< HEAD
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
=======
<article class="card">
  <h1>Benvinguda</h1>
  <p>Benvinguts al Centre de Formació Professional. Aquesta és una altra pàgina de mostra! Totes les pàgines es crearan a /pages. Però d'on obtindrem el contingut?</p>
  
</article>
>>>>>>> ef2596ab015567b889cd7839829c2ed5c7689a9d
