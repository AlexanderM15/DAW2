<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>
    <?php
    $base = 2;
    $exponente = 5;
    $resultado = 1;
    $i = 0;

    while ($i < $exponente) {
        $resultado *= $base;
        $i++;
    }

    echo "<p>La operación de base $base y de exponente $exponente es $resultado</p>";
    ?>
</body>
</html>
