<p>Ejercicio 6 </p>
<?php
if(isset($_GET['nota']) && !empty($_GET['nota']) &&
isset($_GET['edad']) && !empty($_GET['edad']) &&
isset($_GET['sexo']) && !empty($_GET['sexo'])) {
$nota = (int)$_GET['nota']; 
$edad = (int)$_GET['edad']; 
$sexo = (string)$_GET['sexo']; 

// Convertir el sexo a mayúsculas para evitar errores
$sexo = strtoupper($sexo);

// Evaluar las condiciones
if ($nota >= 5 && $edad >= 18 && $sexo == 'F') {
    echo "ACEPTADA ";
} elseif ($nota >= 5 && $edad >= 18 && $sexo == 'M') {
    echo "POSIBLE ";
} else {
    echo "NO ACEPTADA ";
}
echo "por favor introduce los valores rqueridos.";
}
?>