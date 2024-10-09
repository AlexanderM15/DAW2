<?php
function mayor(): int {
    $numeros = func_get_args();
    
    if (count($numeros) === 0) {
        return 0;
    }
    
    $mayor = $numeros[0];
    
    foreach ($numeros as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero; 
        }
    }
    
    return $mayor;
}

echo mayor(3, 5, 9, 1, 8); 




function concatenar(...$palabras): string {
    return implode(" ", $palabras);
}

echo concatenar("Hola", "como", "estas", "que ","jodido", "esta", "PHP"); 



?>
