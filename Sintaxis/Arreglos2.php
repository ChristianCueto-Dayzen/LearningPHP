<?php

//Recorrer arreglos usando for y while
$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);

$num_meses=count($meses);

//echo 'Se encontraron '.$num_meses.' meses en el arreglo: <br />';

/* //con for
for ( $i = 0; $i<$num_meses; $i++ ){
    echo $meses[$i] .'<br /br>';
}
    */

/* //usando while o do-while es casi lo mismo
$contador = 0;
while($contador < $num_meses) {
    echo $meses[$contador].'<br />';
    $contador++;
}
    */
// usando foreach
//foreach($meses as $mes){
  //  echo $mes.'<br /br>';
//}

$meses2 = array(
    'Enero'=>'Dia de reyes','Febrero'=>'Dia de amor y amistad','Marzo'=>'NA','Abril'=>'Dia santo',
    'Mayo'=> 'Cumpleaños','Junio'=>'Vacaciones','Julio'=>'NA','Agosto'=>'NA',
    'Septiembre'=>'Independencia de México','Octubre'=>'Halloween', 'Noviembre'=>'Dia de muertos', 'Diciembre'=>'Navidad'
);

foreach ($meses2 as $mes => $celebracion){
    echo $mes.': '.$celebracion.'<br />';
}


?>