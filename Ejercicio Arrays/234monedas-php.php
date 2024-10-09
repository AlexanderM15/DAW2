<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descomposición de dinero</title>
</head>
<body>
    <?php
    $dinero = 327;

    $arrMonedas = [
        "500" => 0,
        "200" => 0,
        "100" => 0,
        "50" => 0,
        "20" => 0,
        "10" => 0,
        "5" => 0,
        "2" => 0,
        "1" => 0
    ];
        foreach($arrMonedas as $clave=>$valor)
        while($dinero>=$clave){
    $arrMonedas[$clave]++;
    $dinero-=$clave;
}
echo "<ul>";
    foreach($arrMonedas as $clave => $cantidad) {
        if ($cantidad > 0) {
            $tipo = $clave >= 5 ? "billetes" : "monedas";
            echo "<li>$cantidad $tipo de $clave</li>";
        }
    }
    echo "</ul>";

    
    ?>
</body>
</html>
