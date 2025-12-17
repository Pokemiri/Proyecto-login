CREATE DATABASE IF NOT EXISTS usermanager_loginYregistro CHARACTER SET utf8mb4;
USE usermanager_loginYregistro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
);
CREATE TABLE perfil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    rol ENUM('admin','user') NOT NULL DEFAULT 'user',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);