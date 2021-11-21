<?php
// Archivo de configuración para conectarse3 a la Base de datos
//
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "bd_webucam";
// Realizar cadena de conección
try {
    $conn = new PDO("mysql:host=$servidor;dbname=$basededatos;", $usuario, $contrasena);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
?>
