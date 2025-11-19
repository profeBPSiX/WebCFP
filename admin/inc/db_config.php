<?php

$host = 'localhost';
$port = '3306';
$dbname = 'webProject';
$user = 'root';
$password = 'ThisIsMyPass';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
$pdo = new PDO($dsn, $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

?>