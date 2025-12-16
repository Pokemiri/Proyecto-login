<?php
session_start();
include "db.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT 1 FROM usuarios WHERE usuario = ? LIMIT 1");
$stmt->execute([$usuario]);

if ($stmt->fetch()) {
    echo "<h1>Error: el usuario ya existe</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    exit();;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

try {
$stmt = $pdo->prepare("INSERT INTO usuarios (usuario, contrasena) VALUES (?, ?)");

if ($stmt->execute([$usuario, $hash])) {
$_SESSION['usuario_id'] = $pdo->lastInsertId();
 echo "<h1>Usuario registrado correctamente 🎉</h1>";
 echo "<p><a href='create.php'>Crea un usuario</a></p>";
} else {
 echo "<h1>Error al registrar el usuario</h1>";
 echo "<p><a href='registro.php'>Volver al registro</a></p>";
}
} catch (PDOException $e) {
    echo "Error de base de datos: " . $e->getMessage();
}
?>