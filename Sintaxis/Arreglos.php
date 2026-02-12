<?php
/*
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
*/

$meses=array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre', 'Noviembre', 'Diciembre'
);
//Alfabetico
#sort($meses);
//Reverso alfabetico
rsort($meses);

$numeros=array(1,62,2,6,179,257,35,10);

rsort($numeros);

/*
echo 'Total de elementos en arreglo meses: ' . count($meses). '<br /><br />';

$ultimo_mes= count($meses)-1;
echo 'Ultimo mes: ' . $meses[$ultimo_mes];
*/
?>

<!DOCTYPE html>
<html lang = "en">
    <meta charset="UTF-8">
    <title>Meses del año</title>
</html>
<body>
    <h1>Meses del año</h1>
    <ul>
       <!--
        <li>Enero</li>
        <li>Febrero</li>
        <li>Marzo</li>
        <li>...</li>
        -->
        <!--
        <li><?php echo $meses[0]?></li>
        <li><?php echo $meses[1]?></li>
        <li><?php echo $meses[2]?></li>
        <li><?php echo $meses[3]?></li>
        <li><?php echo '...'?></li>
        -->
        <?php 
            /*bucle para recorrer $meses
            foreach($meses as $mes) {
                echo '<li>'.$mes.'</li>';
            }*/

            foreach($numeros as $numero){
                echo '<li>'.$numero.'</li>';
            }
        ?>
    </ul>
</body>




