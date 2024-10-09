<?php
function euros2pesetas($cantidad, $cotizacion = 166.386) {
    return $cantidad * $cotizacion;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombre'];
    $costes = $_POST['coste'];
    
    $totalEuros = 0;
    $totalPesetas = 0;

    // Iniciar la tabla
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tiquet de Compra</title>
    </head>
    <body>
        <h1>Tiquet de Compra</h1>
        <table border='1'>
            <tr>
                <th>Nombre del Producto</th>
                <th>Coste (Euros)</th>
                <th>Coste (Pesetas)</th>
            </tr>";

    foreach ($nombres as $index => $nombre) {
        $costeEuros = floatval($costes[$index]);
        $costePesetas = euros2pesetas($costeEuros);
        
        // Mostrar datos en la tabla
        echo "<tr>
                <td>" . htmlspecialchars($nombre) . "</td>
                <td>" . number_format($costeEuros, 2) . " €</td>
                <td>" . number_format($costePesetas, 2) . " Pts</td>
              </tr>";

        // Sumar al total
        $totalEuros += $costeEuros;
        $totalPesetas += $costePesetas;
    }

    // Mostrar total en euros y pesetas
    echo "<tr>
            <td><strong>Total</strong></td>
            <td><strong>" . number_format($totalEuros, 2) . " €</strong></td>
            <td><strong>" . number_format($totalPesetas, 2) . " Pts</strong></td>
          </tr>
          </table>
          </body>
          </html>";
}
