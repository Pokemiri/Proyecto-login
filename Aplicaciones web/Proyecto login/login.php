<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <style>
        :root{
            --color1: lime;
            --color2: violet;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(90deg, var(--color1), var(--color2));
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: rgba(30, 30, 121, 0.6);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
            color: white;
        }

        .login-container h1 {
            margin-bottom: 30px;
            color: white;
        }
    </style>
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
</body>
</html>