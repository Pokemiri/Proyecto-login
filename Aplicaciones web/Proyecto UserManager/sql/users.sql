CREATE DATABASE IF NOT EXISTS usermanager_loginYregistro CHARACTER SET utf8mb4;
USE usermanager_loginYregistro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    rol ENUM('admin','user') NOT NULL
);