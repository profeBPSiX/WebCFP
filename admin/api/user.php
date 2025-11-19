<?php

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/../inc/db_config.php';

// Recuperem el codi de l'usuari
$userId = $_GET['user'] ?? null;

if (!$userId) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Falta el paràmetre "userId". Exemple: ?user=pepito'
    ]);
    exit;
}

try {
    $stmt = $pdo->prepare('
        SELECT *
        FROM User
        WHERE Login = :userId
        LIMIT 1
    ');
    $stmt->execute(['userId' => $userId]);
    $user = $stmt->fetch();

    // Si no existeix, 404
    if (!$user) {
        http_response_code(404);
        echo json_encode([
            'error' => 'Usuari no trobat'
        ]);
        exit;
    }

    // Retornem les dades desitjades
    $response = [
        'login'         => $user['Login'],
        'name'          => $user['Name'],
        'surname'       => $user['Surname'],
        'nationality'   => $user['Nationality'],
        'admin'         => $user['Admin'],
        'section_Id'    => (int) $user['Section_Id']
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'error'   => 'Error en la consulta',
        'details' => $e->getMessage()
    ]);
}