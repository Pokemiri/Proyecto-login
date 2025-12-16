<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/Pokemiri.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar sesion</title>
</head>
<body class="login-registro">
    <div class="login-container">
    <h1>Iniciar sesion</h1>
    <form action="procesar_login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Entrar</button>
    </form>
    <p>¿No tienes cuenta? <a href="registro.php">Registrate aqui</a></p>
    </div>
    <img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
    <script src="js/custom-cursor.js"></script>
</body>
</html>