<?php
session_start();        // Inicia la sesión existente
session_unset();        // Borra todas las variables de sesión
session_destroy();      // Destruye la sesión
header("Location: login.php"); // Redirige al login
exit();
