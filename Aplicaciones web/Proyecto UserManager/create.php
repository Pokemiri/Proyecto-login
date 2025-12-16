<?php
session_start();
include "db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario_id = $_SESSION['usuario_id'] ?? null;

if (!$usuario_id) {
    echo "<h1>Error: No se ha identificado el usuario ❌</h1>";
    echo "<p><a href='registro.php'>Registrate</a></p>";
    exit();
}

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $rol = $_POST['rol'];

    if (isset($edad)&& $edad < 18) {
    echo "<h1>Error: Debes tener al menos 18 años para registrarte ❌</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    exit();
    }
    $usuarios_admin_autorizados = ["AdminPokemiri@gmail.com"];

    if ($rol === "admin" && !in_array($email, $usuarios_admin_autorizados)) {
        $rol = "user";
    }
    try {
    $stmt = $pdo->prepare("INSERT INTO perfil (usuario_id, nombre,email,edad,rol) VALUES (?,?,?,?,?)");
    $stmt->execute([$usuario_id, $nombre, $email, $edad, $rol]);

    header("Location: login.php");
    exit;
    } catch (PDOException $e) {
        echo "Error de base de datos: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="shortcut icon" href="imagenes/Pokemiri.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="login-registro">
<div class="form-container">
    <h1>Crear Usuario</h1>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <select name="rol">
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <button class="btn" type="submit">Guardar</button>
    </form>
</div>
<script src="js/validacion.js"></script>
<img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
<script src="js/custom-cursor.js"></script>
</body>
</html>