<?php

$server = getenv('DB_HOST');
$user   = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db     = getenv('DB_DATABASE');
$port   = getenv('DB_PORT');

$conn = mysqli_connect($server, $user, $password, $db, $port);

if (!$conn) {
    header('Location: ../errors/error.html');
    exit();
}

?>
