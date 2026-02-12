<?php
/*
//for
for ($i = 1 ; $i<=10 ; $i++) {
    //instrucciones
    echo 'hola' . '<br />';
}
*/
/*
//while
$numero = 0;
while ($numero<5) {

if ($numero < 5){
    echo 'hola <br \>';
}

$numero++;
}
*/

/*
// do-while
$numero = 0;
do{

if ($numero < 5){
    echo 'hola <br \>';
}

$numero++;
}while ($numero<5);
*/
// para recorrer un arreglo
//foreach($numeros as $numero){
   // echo 'imprimir algo para cada elemento en numeros';
//}
//o bien
$agenda = array('Nombre' => 'Carlos', 'Apellido' => 'Alejandro','Telefono'=>551100221);

foreach($agenda as $dato => $valor){
    echo $dato.': '.$valor.'<br />';
}


?>