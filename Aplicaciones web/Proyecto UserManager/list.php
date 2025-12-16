<?php
include "db.php";
$stmt = $pdo->query("SELECT * FROM perfil");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="list">
<div class="form-container-list">
    <h1>Usuarios</h1>
    <a class="btn-crear" href="registro.php">+ Crear Usuario</a>
    <table class="lista">
        <tr>
            <th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Rol</th><th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nombre'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['edad'] ?></td>
            <td><?= $u['rol'] ?></td>
            <td class="acciones">
                <a class="btn-edit" href="edit.php?id=<?= $u['id']?>">Editar</a>
                <a class="btn-delete" href="delete.php?id=<?= $u['id']?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<div id="volver" aria-live="polite">
        <p><a href="bienvenida.php">Volver a la bienvenida</a></p> 
</div>
<img id="customCursor" class="custom-cursor" src="Imagenes/Pikachu.gif" alt="cursor">
<script src="js/custom-cursor.js"></script>
</body>
</html>