<?php

echo 'normales' . '<br />';
# normales
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

echo $semana[0] . '<br />';
echo $semana[1] . '<br />';

echo 'asociativos' . '<br /><br />';
#asociativos

$christian = array('Telefono' => '55000010','Edad' => 21,'Apellido' => 'Cueto');
echo $christian['Telefono'] . '' . '<br />';

echo 'Multidimencionales' . '<br /><br />';

#Multidimencionales

$amigos = array(
    array('Carlos', 21),
    array('Manuel', 23),
    array('Diana', 27)
);

echo $amigos[2][0];

?>




