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
    <title>Bienvenida</title>
</head>
<style>
html, body, *{
            cursor: none !important;
        }
        input, textarea, select, [contenteditable="true"], button {
            cursor: auto !important;
        }
        :root{
            --color1: pink;
            --color2: violet;
        }
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, var(--color1), var(--color2));
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
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
         h1 {
        font-size: clamp(2rem, 6vw, 4rem);
        text-align: center;
        }

        p {
        font-size: clamp(1rem, 2.5vw, 1.5rem);
        text-align: center;
        line-height: 1.6;
        }
</style>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario'];?>🎉</h1>
    <p>Has iniciado sesion correctamente.</p>
    <p><a href="logout.php">Cerrar sesion</a></p>
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