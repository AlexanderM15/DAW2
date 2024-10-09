<p>Ejercicio 5</p>



<?php
// Verificamos que se hayan enviado los parámetros 'base' y 'exp' a través del método GET y que no estén vacíos
if (isset($_GET['base']) && isset($_GET['exp']) && !empty($_GET['base']) && !empty($_GET['exp'])) {
    // Obtenemos los valores de la base y el exponente
    $base = (float)$_GET['base'];
    $exp = (int)$_GET['exp'];

    // Inicializamos la variable del resultado
    $resultado = 0;

    // Verificamos las condiciones
    if ($exp == 0) {
        // Si el exponente es 0, el resultado siempre es 1
        $resultado = 1;
    } elseif ($exp > 0) {
        // Si el exponente es positivo, simplemente calculamos la potencia
        $resultado = pow($base, $exp);
    } else {
        // Si el exponente es negativo, calculamos 1 / (base^|exponente|)
        $resultado = 1 / pow($base, abs($exp));
    }

    // Mostramos el resultado
    echo "<h2>Resultado</h2>";
    echo "El resultado de $base^$exp es: $resultado";
} else {
    echo "Por favor, introduce una base y un exponente válidos.";
}
?>
