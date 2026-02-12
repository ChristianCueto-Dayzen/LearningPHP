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

?>