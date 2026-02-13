<?php
//nombre,precio
$productos = array(
    array("Chamarra", 899),
    array("Suéter", 599),
    array("Camisa", 449),
    array("Zapatos", 1099), 
    array("Botas", 1299),
    array("Abrigo", 1599),
    array("Playera", 299),
    array("Gorro", 199),
    array("Sombrero", 349),
    array("Bufanda", 179),
    array("Gorra", 249),
    array("Sandalias", 399),
    array("Lentes", 699),
    array("Tenis", 1199)
);
$num_productos=count($productos);

$productos_alf= sort($productos);
$productos_rAlf= rsort($productos);


?>

<!DOCTYPE html>
<html>
    <meta ="UTF-8">
    <title>Productos</title>
</html>
<body>
    <h1>Lista de productos</h1>
    <ul>
        <?php 
            for( $i = 0; $i < $num_productos; $i++ ){
                echo '<li>'.$productos[$i][0].': $'.$productos[$i][1].'</li>';
            }
        ?>
    </ul>
    
</body>