<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <?php
    $base = 2;
    $exponente = 5;
    $resultado = 1;
    $i = 0;

    do {
        $resultado *= $base;
        $i++;
    } while ($i < $exponente);

    echo "<p>La operación de base $base y de exponente $exponente es $resultado</p>";
    ?>
</body>
</html>
