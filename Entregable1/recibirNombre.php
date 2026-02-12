<?php
    //print_r($_POST);

    if (empty($_POST['nombre'])){
        header('Location: ./');
        exit;
    } 
    $nombre=$_POST['nombre'];

    echo 'Hola, ' . $nombre . '. Tus datos fueron recibidos y mostrados desde php';  

?>