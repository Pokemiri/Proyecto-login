<?php
include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT 1 FROM usuarios WHERE usuario = ? LIMIT 1");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    echo "<h1>Error: el usuario ya existe</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    $stmt->close();
    $conn->close();
    exit();;
}
$stmt->close();

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);

if ($stmt->execute()) {
 echo "<h1>Usuario registrado correctamente 🎉</h1>";
 echo "<p><a href='login.php'>Iniciar sesión</a></p>";
}
$stmt->close();
$conn->close();
?>