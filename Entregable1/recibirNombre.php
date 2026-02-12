<?php
    //print_r($_POST);

    if (empty($_POST['nombre'])){
        header('Location: http://localhost/curso_php/Entregable1/');
    } 
    $nombre=$_POST['nombre'];

    echo 'Hola, ' . $nombre . '. Tus datos fueron recibidos y mostrados desde php';  

?>