<?php

$sexos = array();
for ($i = 0; $i < 100; $i++) {
    $random = rand(0, 1);
    if ($random === 0) {
        $sexos[] = "M"; // Masculino
    } else {
        $sexos[] = "F"; // Femenino
    }
}

$conteo = array('M' => 0, 'F' => 0);
foreach ($sexos as $sexo) {
    $conteo[$sexo]++;
    echo "<li>$sexo</li>";
}

echo "<ul>";
echo "<h1>Resultados</h1>";
echo "<li>Masculino: " . $conteo['M'] . "</li>";
echo "<li>Femenino: " . $conteo['F'] . "</li>";
echo "</ul>";

?>
