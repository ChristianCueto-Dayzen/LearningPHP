<?php
/*
$amigo = array('telefono' => 4125638974, 'edad'=>15, 'pais' => 'mexico');

extract($amigo); //extrae elementos de un arreglo asociativo
//de modo que convierte los elementos a variables, sin la necesidad de declararlos y luego asignarles valor:

echo $telefono.'<br />';
echo $edad.'<br />';
*/

$semana = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");

//$ultimo_dia = array_pop($semana); //EXTRAE y ELIMINA el último valor del arreglo

//echo $ultimo_dia.'<br />';

//echo join('<br />', $semana); //muestra todos los elementos separados de forma personalizada

//sort($semana); //ordenar de forma alfabética (rsort() lo hace de forma inversa)

//count($semana); //contar elementos

$semana_reverse = array_reverse($semana); //agarra un array e invierte el orden (no los reordena segun un critero)
echo join ('<br />', $semana_reverse );

/* funciones que podrías utilizar:
1.- array_fill
2.- array_push

Más funciones en: https://www.php.net/manual/es/ref.array.php
*/

?>