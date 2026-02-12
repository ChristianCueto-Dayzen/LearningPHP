<?php

function saludo($nombre){
    echo "Hola, $nombre".'<br />';
}

saludo('Christian');

//Nota: no usar echo en las funciones
function suma($a,$b){
    //echo $a+$b;
    return $a + $b;
}

$total = suma(1,2);

echo $total . '<br />';

//Nota: podemos forzar que devuelva un tipo de dato específico:
//declare(strict_types=1); -> php es inteligente y puede forzar el cambio de string '1' a 1. Con esto evitas que lo haga.
function sumar($a,$b): int{
    $c =$a + $b;
    return $c;
}

$total = sumar(1,2);

echo $total . '<br />';

?>