<?php
// Incluir el archivo con las funciones
include '244euros.php';

// Probar con la cotización por defecto (166.386)
echo "Prueba con cotización por defecto (166.386):<br>";
echo "1000 pesetas son " . peseta2euros(1000) . " euros.<br>";
echo "10 euros son " . euros2pesetas(10) . " pesetas.<br><br>";

// Probar con una cotización personalizada (ejemplo: 166.36)
echo "Prueba con nueva cotización (166.36):<br>";
echo "1000 pesetas son " . peseta2euros(1000, 166.36) . " euros.<br>";
echo "10 euros son " . euros2pesetas(10, 166.36) . " pesetas.<br><br>";

// Otra prueba con diferentes cantidades y cotización personalizada
echo "Prueba con cantidad y cotización personalizada:<br>";
echo "5000 pesetas son " . peseta2euros(5000, 166.36) . " euros.<br>";
echo "20 euros son " . euros2pesetas(20, 166.36) . " pesetas.<br>";
?>
