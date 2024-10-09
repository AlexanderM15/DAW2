<p>Ejercicio 1 </p>
<?php


$n1=25;
$n2=15;

$suma=$n1+$n2;
$resta= $n1-$n2;
$division= $n1/$n2;
$multiplicacion=$n1*$n2;
echo "Suma".$suma."<br>" ;
echo "Resta".$resta ."<br>";
echo "Division".$division ."<br>";
echo "Multiplicacion".$multiplicacion. "<br>";
?>
    <p>Ejercicio 2</p>
    
    <?php
    $cantidadMinutos=1000;
$horas=intdiv($cantidadMinutos,60). "<br>";
$minutos=$cantidadMinutos%60;
echo "La cantidad de Horas son: ".$cantidadHoras= $horas."<br>";
echo " La cantidad de Minutos son: ".$CMinutos=$minutos."<br>";



    ?>

        <p>Ejercicio 3</p>

        <?php
            $numero=23;
            if($numero<10 || $numero>99){
                echo "El numero debe ser de dos cifas";
                return;
            }
            
            $decenas=intdiv($numero,10);
            $unidades=$numero%10;
            $invertirNumero=$unidades *10 +$decenas;
            echo"El numero invertido de $numero es $invertirNumero";

        ?>

        <p>Ejercicio 4 </p>

            <?php
                $_2e=10;
                $_1e=20;
                $_50c=10;
                $_20c=27;
                $_10c=10;
                $total2e=$_2e*2;
                $total1e=$_1e;
                $total50c=$_50c*0.50;
                $total20c=$_20c*0.20;
                $total10c=$_20c*0.10;
                $totalEuros = $total2e + $total1e + $total50c + $total20c + $total10c;
                echo "Tienes un total de: " . $totalEuros . " euros.";

            ?>
            <p>Ejercicio 5</p>
            <?php
    
    $base = 5;

    $exponente = -25;

    // Caso 1: El exponente es 0
    if ($exponente == 0) {
        $resultado = 1; // Cualquier número elevado a 0 es 1
    } 
    // Caso 2: El exponente es positivo
    else if ($exponente > 0) {
        $resultado = pow($base, $exponente); // Usamos la función pow para calcular la potencia
    } 
    // Caso 3: El exponente es negativo
    else {
        $resultado = 1 / pow($base, abs($exponente)); // Potencia con el exponente positivo y luego hacer 1/potencia
    }

    // Mostrar el resultado
    echo "El resultado de $base elevado a $exponente es: $resultado\n";
?>

<p>Ejercicio 6 </p>
<?php
// Definir las variables directamente
$nota = 7; // Cambia este valor para probar diferentes notas
$edad = 19; // Cambia este valor para probar diferentes edades
$sexo = 'F'; // Cambia este valor a 'M' o 'F' para probar diferentes sexos

// Convertir el sexo a mayúsculas para evitar errores
$sexo = strtoupper($sexo);

// Evaluar las condiciones
if ($nota >= 5 && $edad >= 18 && $sexo == 'F') {
    echo "ACEPTADA";
} elseif ($nota >= 5 && $edad >= 18 && $sexo == 'M') {
    echo "POSIBLE";
} else {
    echo "NO ACEPTADA";
}
?>
