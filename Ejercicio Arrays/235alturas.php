<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alturas de Personas</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Altura (cm)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['altura'])) {
                    $nombres = $_POST['nombre'];
                    $alturas = $_POST['altura'];
                    $sumaAlturas = 0;
                    $count = 0;

                    for ($i = 0; $i < count($nombres); $i++) {
                        $nombre = htmlspecialchars($nombres[$i]);
                        $altura = htmlspecialchars($alturas[$i]);

                        echo "<tr>";
                        echo "<td>$nombre</td>";
                        echo "<td>$altura</td>";
                        echo "</tr>";

                        $sumaAlturas += $altura;
                        $count++;
                    }

                    if ($count > 0) {
                        $alturaMedia = $sumaAlturas / $count;
                        echo "<tr>";
                        echo "<td><strong>Altura Media</strong></td>";
                        echo "<td><strong>" .$alturaMedia . "</strong></td>";
                        echo "</tr>";
                    } else {
                        echo "<tr><td colspan='2'>No hay datos disponibles.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Por favor, ingresa al menos una altura.</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
