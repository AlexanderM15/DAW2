<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos con Números Aleatorios</title>
</head>
<body>

    <?php
        $numeros = array();

        for ($i = 0; $i < 33; $i++) {
            $numeros[] = rand(0, 100);
        }

        echo "<h2>Números generados:</h2>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";

        // Calcular el mayor numero
        $mayor = max($numeros);

        // Calcular el menor numero
        $menor = min($numeros);

        //suma de todos los numeros
        $suma=array_sum($numeros);
        //  media de los numeros
        $media = intval($suma / count($numeros));

        echo "<h3>Resultados:</h3>";
        echo "<p>El mayor número es: $mayor</p>";
        echo "<p>El menor número es: $menor</p>";
        echo"<p>La suma de todos los numeros es: $suma</p>"; 
        echo "<p>La media de los números es: $media</p>";
    ?>

</body>
</html>
