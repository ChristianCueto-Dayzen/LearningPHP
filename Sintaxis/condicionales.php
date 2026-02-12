<?php
/*
    if(condicion){
        //instrucciones
    }
*/
/*
$edad = 17;
$nombre = 'Christsan';
if($edad >= 17 && $nombre == 'Christian'){
    echo '<h1>Bienvenido</h1>';
} 
if($edad < 17 OR $nombre != 'Christian'){
    echo '<h1>No puedes entrar</h1>';
}
*/

/* #else

$edad=17;

if($edad >= 18){
    echo 'Bienvenido';
}else{
    echo 'No eres bienvenido';
}
*/
/* #elseif (condicional anidada)
$mes = 'Diciembre';

if($mes == 'Diciembre'){
    echo 'Feliz Navidad';
} elseif($mes == 'Enero'){
    echo 'Feliz día de reyes';
} elseif($mes == 'Mayo'){
    echo 'Feliz cumpleaños';
} else {
    echo 'Nada por celebrar';
}
*/
/* //usando boleanos
$boleano = true;

if ($boleano) {
    echo 'verdadero';
} else {
    echo 'falso';
}
*/

/* //Usando switch

$mes = 'Febrero';

switch( $mes ) {
    case 'Enero':
        echo 'feliz día';
        break;
    case 'Febrero':
        echo 'No seas soldado caido el 14';
        break;
    default:
        echo 'mes sin comentarios';
        break;
}
*/ 
//shortand if
$edad=1;
//isset($edad) -> devuelve true o false si la variable tiene contenido. (0 o 1)
// ? indica si la condicion es para cuando se cumple la condicion
// : para cuando no
$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';
echo $edad;

?>