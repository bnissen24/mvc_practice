<?php
$dsn = 'mysql:host=sql1.njit.edu;dbname=bcn3_proj';
$username = 'bcn3_proj';
$password = 'w9hLvRFP';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>