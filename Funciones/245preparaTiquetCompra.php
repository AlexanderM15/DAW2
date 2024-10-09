<?php
$cantidad = isset($_GET['cantidad']) ? intval($_GET['cantidad']) : 0;

if ($cantidad <= 0) {
    die("La cantidad de productos debe ser mayor que cero.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Productos</title>
</head>
<body>
    <h1>Introduzca los datos de los <?php echo $cantidad; ?> productos</h1>
    <form action="245imprimeTiquetCompra.php" method="post">
        <?php for ($i = 1; $i <= $cantidad; $i++): ?>
            <h3>Producto <?php echo $i; ?></h3>
            <label for="nombre<?php echo $i; ?>">Nombre:</label>
            <input type="text" id="nombre<?php echo $i; ?>" name="nombre[]" required>
            <br>
            <label for="coste<?php echo $i; ?>">Coste (en euros):</label>
            <input type="number" id="coste<?php echo $i; ?>" name="coste[]" step="0.01" required>
            <br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
