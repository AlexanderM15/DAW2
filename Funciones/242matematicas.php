<?php

function digitos(int $num): int {
    $num = abs($num);  
    if ($num == 0) {
        return 1; 
    }
    $cantidad = 0;
    while ($num > 0) {
        $num = intdiv($num, 10); 
        $cantidad++;
    }
    return $cantidad;
}

$num =8255525252 ;


//-----------------------------------------------
 function digitoN(int $num, int $pos): int{
$cantidadDigitos= digitos($num);

if ($pos <1|| $pos > $cantidadDigitos){
    return -1;
}

$num= intdiv($num,pow(10, $cantidadDigitos - $pos));

return $num %10;
}

$num=845624852;
$pos=3;
echo " el digito en la posicion $pos de $num es:" . digitoN($num,$pos );

//------------------------------


function quitaPorDetras (int $num,int $cant): int{
$num = intdiv($num,pow(10,$cant));

return $num;

}

$num= 8255234;
$cant=3;
echo "Número después de quitar $cant dígitos por detrás de $num: " . quitaPorDetras($num, $cant) . "\n";  
//---------------------------

function quitaPorDelante(int $num, int $cant): int {
    $cantidadDigitos = digitos($num);

    if ($cant >= $cantidadDigitos) {
        return 0; 
    }

    $num = $num % pow(10, $cantidadDigitos - $cant);

    return $num;
}
$num = 845624852;
$cant = 4;
echo "Número después de quitar $cant dígitos por delante de $num: " . quitaPorDelante($num, $cant) . "\n";

?>
