<?php

declare(strict_types=1);

function sumar(float $num1, float $num2): float {
    return $num1 + $num2;
}

function restar(float $num1, float $num2): float {
    return $num1 - $num2;
}

function multiplicar(float $num1, float $num2): float {
    return $num1 * $num2;
}

function dividir(float $num1, float $num2): float {
    if ($num2 == 0) {
        return 0; // Evitar la división entre 0
    }
    return $num1 / $num2;
}

?>
