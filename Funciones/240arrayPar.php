<?php
declare (strict_types=1);
function esPar(int $num):bool{
    return $num%2==0;
}
echo esPar(num:22)? "es par":"es impar";


function arrayAleatorio(int $tam, int $min, int $max): array {
    $arrNumAle = array();
    for ($i = 0; $i < $tam; $i++) {
        $arrayNumAle[$i]=rand(min:$min,max:$max);

    }
    return $arrNumAle;
}
function mostrarArray(array $arr):void{
    foreach($arr as $value)
    echo $value. "";
}

function arrayPares (array $array):int{
    $contPares=0;
    foreach($array as $value)
    if(esPar(num:$value))
    $contPares++;
return $contPares;
}

$arrResultado= arrayAleatorio(15,10,100);
mostrarArray(arr:$arrResultado);
echo "<br";
echo  arrayPares($arrResultado);
?>