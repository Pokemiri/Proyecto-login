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
            --color1: deeppink;
            --color2: darkblue;
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
        #user-panel{
        position: fixed;
        left: 16px;
        bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(0,0,0,0.45);
        padding: 8px 10px;
        border-radius: 999px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.4);
        z-index: 2147483647;
        color: #fff;
        backdrop-filter: blur(4px);
        pointer-events: auto;
    }
    #panel-username { font-weight: 600; font-size: 14px; color: #fff; white-space: nowrap; }
    a[href$="logout.php"]{
            color: darkblue !important;
        }
</style>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario'];?>🎉</h1>
    <p>Has iniciado sesion correctamente.</p>
    

    <!-- Panel inferior izquierdo: avatar + nombre -->
    <div id="user-panel" aria-live="polite">
        <span id="panel-username"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
        <p><a href="logout.php">Cerrar sesion</a></p>
    </div>

    <img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
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