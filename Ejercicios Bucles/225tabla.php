<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla generada</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Tabla generada</h2>
    <?php
    // Comprobar si los datos han sido enviados
    if (isset($_POST['filas']) && isset($_POST['columnas'])) {
        // Obtener las filas y columnas del formulario
        $filas = intval($_POST['filas']);
        $columnas = intval($_POST['columnas']);

        // Generar la tabla
        echo "<table>";
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                // Mostrar las coordenadas de la celda
                echo "<td>(" . $i . ", " . $j . ")</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se han proporcionado datos válidos.";
    }
    ?>
    <br>
    <a href="225formulario.html">Volver al formulario</a>
</body>
</html>
