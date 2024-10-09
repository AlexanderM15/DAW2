<p>Ejercicio8</p>

<?php

$ladoA=5;
$ladoB=3;
$ladoC=4;


if (pow($ladoA, 2) + pow($ladoB, 2) == pow($ladoC, 2)) {
    echo "Es un triangulo rectangulo.";
} elseif ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "Es un triangulo equilatero.";
} elseif ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) {
    echo "Es un triangulo isosceles.";
} else {
    echo "Es un triángulo escaleno.";
}
?>
