<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php
$base=2;
$exponente=5;
$resultado=1;

for($i=0;$i<$exponente;$i++){
    $resultado*=$base;

}
echo "<p> la operacion de base $base y de exponente $exponente es $resultado</P>";


?>
</body>
</html>