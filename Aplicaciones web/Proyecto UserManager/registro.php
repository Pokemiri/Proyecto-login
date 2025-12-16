<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/Pokemiri.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro</title>
</head>
<body class="login-registro">
    <div class="login-container">
    <h1>Registro</h1>
    <form action="procesar_registro.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Registrate</button>
    </form>
    <p class="registro">¿Ya tienes una cuenta y un usuario? <a href="login.php">Iniciar sesion aqui</a></p>
    </div>
    <img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
    <script src="js/custom-cursor.js"></script>
</body>
</html>