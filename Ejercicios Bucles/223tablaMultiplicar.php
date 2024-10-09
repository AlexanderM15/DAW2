<?php

if (isset($_GET['num']) && is_numeric($_GET['num'])) {
    $numero = intval($_GET['num']);
} else {
    
    $numero = 1; // 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar del <?php echo $numero; ?></title>
   
</head>
<body>

<h2 style="text-align: center;">Tabla de multiplicar del <?php echo $numero; ?></h2>
<table style{
    border= 1px;
}

<table>
    <thead>
        <tr>
            <th>Multiplicando</th>
            <th>Multiplicador</th>
            <th>Resultado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>$i</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
