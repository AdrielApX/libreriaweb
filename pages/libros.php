<?php 
include "../conexion.php";
include "../templates/header.php";

$query = $pdo->query("SELECT id_titulo, titulo, tipo, precio FROM titulos");

echo "<h2>Listado de Libros</h2><ul>";

while ($libro = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<li><strong>{$libro['titulo']}</strong> ({$libro['id_titulo']}) - {$libro['tipo']} / Precio: {$libro['precio']}</li>";
}

echo "</ul>";

include "../templates/footer.php";
?>
