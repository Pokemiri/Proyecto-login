<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/Pokemiri.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Bienvenida</title>
</head>
<body class="bienvenida">
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']);?>🎉</h1>
    <h2>Has iniciado sesion correctamente.</h2>
    <!-- Panel inferior izquierdo: avatar + nombre -->
    <div id="user-panel" aria-live="polite">
        <span id="panel-username"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
        <p><a href="logout.php">Cerrar sesion</a></p>
        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
            <p><a href="index.php">Ir al panel de administrador</a></p>
        <?php endif; ?> 
    </div>
    <img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
    <script src="js/custom-cursor.js"></script>
</body>
</html>