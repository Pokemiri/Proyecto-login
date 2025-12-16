<?php
include "db.php";

$id = $_GET['id'];
if ($id) {
    $stmt = $pdo->prepare("SELECT usuario_id FROM perfil WHERE id = ?");
    $stmt->execute([$id]);
    $perfil = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($perfil) {
        $usuario_id = $perfil['usuario_id'];
        $stmt = $pdo->prepare("DELETE FROM perfil WHERE id = ?");
        $stmt->execute([$id]);
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id =?");
        $stmt->execute([$usuario_id]);
        $stmt = $pdo->query("SELECT MAX(id) AS max_id FROM perfil");
        $maxPerfil = $stmt->fetch(PDO::FETCH_ASSOC)['max_id'] ?? 0;
        $nextPerfil = $maxPerfil + 1;
        $pdo->exec("ALTER TABLE perfil AUTO_INCREMENT = $nextPerfil");
        $stmt = $pdo->query("SELECT MAX(id) AS max_id FROM usuarios");
        $maxUsuario = $stmt->fetch(PDO::FETCH_ASSOC)['max_id'] ?? 0;
        $nextUsuario = $maxUsuario + 1;
        $pdo->exec("ALTER TABLE usuarios AUTO_INCREMENT = $nextUsuario");
    }
}
header("Location: list.php");
exit;
?>