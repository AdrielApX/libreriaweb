<?php
$host = "sql101.infinityfree.com"; // Host del hosting
$db   = "if0_40539045_dblibreria";   // Nombre de mi base de datos
$user = "if0_40539045";              // Mi usuario MySQL
$pass = "vrxeZTCqbXCX2X";            // Mi contraseña MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
