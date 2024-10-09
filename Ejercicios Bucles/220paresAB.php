<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
    $inicio=random_int(1,10);
    $fin=random_int(11,50);

        for($i=$inicio;$i<=$fin;$i++){
            if($i%2==0){
                echo "<li> $i</li>";

            }
        }

    
    
    
    
    ?>
</body>
</html>