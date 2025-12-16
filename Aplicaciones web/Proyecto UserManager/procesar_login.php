<?php
session_start();
include "db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT u.id, u.contrasena, p.rol FROM usuarios u INNER JOIN perfil p ON u.id = p.usuario_id WHERE u.usuario = ?");
$stmt->execute([$usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user) {
    $id = $user['id'];
    $hash = $user['contrasena'];

    if(password_verify($password, $hash)) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $user['rol'];
        header("Location: bienvenida.php");
        exit;
     } else {
        echo "<h1>Contraseña incorrecta ❌</h1>";
        echo "<p><a href='login.php'>Volver a intentar</a></p>";
    }
} else {
    echo "<h1>Usuario no encontrado ❌</h1>";
    echo "<p><a href='registro.php'>Registrate</a></p>";
}
?>