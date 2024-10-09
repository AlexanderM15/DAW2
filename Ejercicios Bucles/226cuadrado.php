<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Bordes</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabla con Contenido en los Bordes</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filas = intval($_POST['filas']);
        $columnas = intval($_POST['columnas']);

        echo "<table>";
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columnas; $j++) {
                // Rellenar los bordes
                if ($i == 1 || $i == $filas || $j == 1 || $j == $columnas) {
                    echo "<td>($i, $j)</td>";
                } else {
                    echo "<td></td>";  // Celdas internas vacías
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se recibieron los datos correctamente.";
    }
    ?>
</body>
</html>
