<?php
// Recibimos la cantidad enviada desde el formulario anterior
if (isset($_POST['cantidad']) && is_numeric($_POST['cantidad'])) {
    $cantidad = intval($_POST['cantidad']);
} else {
    // Si no se recibe una cantidad válida, redirigir al formulario inicial
    header("Location: 224formulario.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos</title>
</head>
<body>

<h2>Ingrese los valores</h2>

<form action="224sumarDatos.php" method="post">
    <?php
    // Generamos tantas cajas de texto como la cantidad recibida
    for ($i = 1; $i <= $cantidad; $i++) {
        echo "<label for='dato$i'>Dato $i:</label>";
        echo "<input type='number' id='dato$i' name='datos[]' required><br><br>";
    }
    ?>
    <input type="submit" value="Sumar Datos">
</form>

</body>
</html>
