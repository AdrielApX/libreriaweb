<?php
include "../conexion.php";
include "../templates/header.php";

$query = $pdo->query("SELECT id_autor, nombre, apellido, ciudad, pais FROM autores");

echo "<h2>Listado de Autores</h2><ul>";

while ($autor = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<li><strong>{$autor['nombre']} {$autor['apellido']}</strong> - {$autor['ciudad']}, {$autor['pais']} (ID: {$autor['id_autor']})</li>";
}

echo "</ul>";

include "../templates/footer.php";
?>
