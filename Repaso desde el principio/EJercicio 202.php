<?php
$x = 166;
$y = 999;

$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$division = $x / $y;

echo "La suma de $x + $y = $suma <br>";
echo "La resta de $x - $y = $resta <br>";
echo "La multiplicación de $x * $y = $multiplicacion <br>";
echo "La división de $x / $y = $division <br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        tr,td{
            border: 1px solid black;

        }


    </style>
</head>
<body>
    <?php
$nombre="Alexander";
$apellido="Mora";
$apellidoSegundo="Mendez";
$mail="aksjksd@gmail.com";
$aNacimiento=1993;
$telefono="610074607";

echo "<table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>$nombre</td>
        </tr>
        <tr>
            <td>Primer Apellido</td>
            <td>$apellido</td>
        </tr>
        <tr>
            <td>Segundo Apellido</td>
            <td>$apellidoSegundo</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>$mail</td>
        </tr>
        <tr>
            <td>Año de Nacimiento</td>
            <td>$aNacimiento</td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td>$telefono</td>
        </tr>
      </table>";


?>


</body>
</html>