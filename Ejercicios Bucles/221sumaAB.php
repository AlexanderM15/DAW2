<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
    $inicio=random_int(1,10);
    $fin=random_int(11,50);

    $suma=0;
for($i=$inicio;$i<=$fin;$i++){
    $suma+=$i;
    echo $suma."<br>";

}
echo  "<p> Suma final: $suma<p>";

?>
</body>
</html>