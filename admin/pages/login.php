<?php
session_start();


$admin_user = "erik";
$admin_pass = "1234";


if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $admin_user && $_POST['password'] === $admin_pass) {
        $_SESSION['admin'] = $_POST['username'];
    } else {
        $error = "Usuari o contrasenya incorrectes.";
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ?p=login");
    exit();
}


if (!isset($_SESSION['admin'])):
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici de sessió - Administradors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        input {
            margin: 10px 0;
            padding: 8px;
            width: 200px;
        }
        button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <form method="POST" action="?p=login">
        <h2>Inici de sessió</h2>
        <input type="text" name="username" placeholder="Usuari" required><br>
        <input type="password" name="password" placeholder="Contrasenya" required><br>
        <button type="submit">Entrar</button>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </form>
</body>
</html>

<?php

else:
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Centre de Formació - Administració</title>
</head>
<body>
    <header>
        <h1>Benvinguts</h1>
    </header>

    <main>
        <p>Aquesta és la pàgina d'inici dels administradors.</p>
        <ul>
            <li>Pasar de pàgina</li>
        </ul>
        <a href="?logout=true">Tancar sessió</a>
    </main>

    <footer>
        <p>© 2025 Centre de Formació</p>
    </footer>
</body>
</html>

<?php endif; ?>

