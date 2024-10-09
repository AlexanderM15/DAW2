<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios</title>
</head>
<body>
    <>
        <?php
        
        $numeros = array();

        
        for ($i = 0; $i < 50; $i++) {
            $numeros[] = rand(0, 99);
        }
echo "<ul>";
       
        foreach ($numeros as $numero) {
            echo "<li>$numero</li>";
           
        }
        echo"</ul>";
        ?>
    </>
</body>
</html>
