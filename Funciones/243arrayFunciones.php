<?php

/*declare(strict_types=1);
include_once("243biblioteca.php");

$arrFunciones = ["sumar", "restar", "multiplicar", "dividir"];

// Comprobamos si se han recibido los dos números por URL
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = (float) $_GET['num1']; // Convertimos a float por si llegan como string
    $num2 = (float) $_GET['num2'];

    // Recorremos el array de funciones
    foreach ($arrFunciones as $funcion) {
        if (function_exists($funcion)) {
            $resultado = $funcion($num1, $num2);
            echo "El resultado de $funcion($num1, $num2) es: $resultado<br>";
        }
    }
} else {
    echo "Por favor, proporciona num1 y num2 en la URL.";
}
*/


declare(strict_types=1);
include_once("243biblioteca.php");

$arrFunciones = ["sumar", "restar", "multiplicar", "dividir"];

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = (float) $_POST['num1']; 
    $num2 = (float) $_POST['num2'];
    $operacion=$_POST['operacion'];
if(in_array($operacion,$arrFunciones)){

            $resultado = $operacion ($num1, $num2);
           
            echo "El resultado de la operación $operacion($num1, $num2) es: $resultado";
    } else {
        echo "La operación seleccionada no es válida.";
    }

} else {
    echo "Por favor, proporciona los números correctamente.";
}



?>
