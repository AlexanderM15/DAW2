<?php
// Verificamos que se hayan enviado los datos desde el formulario anterior
if (isset($_POST['datos']) && is_array($_POST['datos'])) {
    $suma = 0;
    // Sumamos todos los valores del array 'datos'
    foreach ($_POST['datos'] as $dato) {
        if (is_numeric($dato)) {
            $suma += floatval($dato);
        }
    }
} else {
    // Si no se han enviado los datos, redirigir al formulario inicial
    header("Location: 224formulario.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Suma</title>
</head>
<body>

<h2>Resultado de la Suma</h2>

<p>La suma total de los datos ingresados es: <strong><?php echo $suma; ?></strong></p>

</body>
</html>
