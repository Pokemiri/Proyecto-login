<?php
$host = 'localhost';
$dbname = 'usermanager_loginYregistro';
$user = 'miriam1';
$pass = '1234';

try {
    $pdo =new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>