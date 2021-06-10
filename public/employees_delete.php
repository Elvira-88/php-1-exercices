<?php

require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$body = file_get_contents('php://input');

$person = json_decode($body, true);

$query = 'DELETE FROM employees WHERE id = :identificador';

$stm = $dbConnexion->prepare($query);
$stm->bindParam(':identificador', $person['id']);
$stm->execute();

$result = $stm->rowCount();

$response = [
    'status' => $stm->rowCount() === 0 ? 'error' : 'success',
    'message' => $stm->rowCount() === 0 ? 'No hemos eliminado a nadie' : 'He eliminado '.$result.'fila',
];

echo json_encode($response);

exit();