<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$usuario = file("usuarios.txt", FILE_IGNORE_NEW_LINES);

$login_existoso = false;
foreach ($usuario as $linea) {
    list($user, $hash) = explode(":", $linea);
    if ($user === $usuario && password_verify($password, $hash)) {
        $login_existoso = true;
        $_SESSION['usuario'] = $usuario;
        break;
    }
}
if($login_existoso){
    header("Location: bienvenida.php");
    exit;
}else{
    echo "<h1>Usuario o contraseña incorrectos</h1>";
    echo "<p><a href='login.php'>Volver a intentar</a></p>";
}
?>