<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/Pokemiri.png" type="image/x-icon">
    <title>Registro de usuarios</title>
</head>
<body>
    <style>
        html, body, *{
            cursor: none !important;
        }
        input, textarea, select, [contenteditable="true"], button {
            cursor: auto !important;
        }
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
        body {cursor: none;}
        .custom-cursor {
            position: fixed;
            pointer-events: none;
            width: 48px;
            height: 48px;
            transform: translate(-50%, -50%);
            z-index: 2147483647;
            display: none;
        }
    </style>
    <div class="login-container">
    <h1>Registro</h1>
    <form action="procesar_registro.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Registrate</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="login.php">Iniciar sesion aqui</a></p>
    </div>
    <img id="customCursor" class="custom-cursor" src="Imagenes/Pikchu.gif" alt="cursor">
<script>
     const customCursor = document.getElementById('customCursor');
     function isTouch(){ return('ontouchstart' in window)||(navigator.maxTouchPoints>0)||(navigator.msMaxTouchPoints>0);}
     if (isTouch()){
        customCursor.style.display = 'none';
        document.body.style.cursor = 'auto';
        } else {
            document.addEventListener('mousemove', e => {
                customCursor.style.display = 'block';
                customCursor.style.left = e.clientX + 'px';
                customCursor.style.top = e.clientY + 'px';
            });
            document.addEventListener('mouseenter', () => customCursor.style.display = 'block');
            document.addEventListener('mouseleave', () => customCursor.style.display = 'none');
     }   
</script>
</body>
</html>