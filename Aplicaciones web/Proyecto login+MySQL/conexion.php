<?php
$host = "localhost";
$user = "miriam1"; 
$pass = "1234"; 
$db = "proyecto_login_MySQL";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
 die("Error de conexión: " . $conn->connect_error);
}
?>