<?php
include "../conexion.php";
include "../templates/header.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $stmt = $pdo->prepare("
        INSERT INTO contacto (fecha, correo, nombre, asunto, comentario)
        VALUES (NOW(), ?, ?, ?, ?)
    ");

    $stmt->execute([
        $_POST["correo"],
        $_POST["nombre"],
        $_POST["asunto"],
        $_POST["comentario"]
    ]);

    echo "<p class='exito'>Mensaje enviado correctamente.</p>";
}
?>

<h2>Formulario de Contacto</h2>

<form method="POST">
    <label>Correo:</label>
    <input type="email" name="correo" required>

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Asunto:</label>
    <input type="text" name="asunto" required>

    <label>Comentario:</label>
    <textarea name="comentario" required></textarea>

    <button type="submit">Enviar</button>
</form>

<?php include "../templates/footer.php"; ?>
