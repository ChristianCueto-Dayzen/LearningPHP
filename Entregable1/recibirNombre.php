<?php

    //print_r($_POST);

    if ($_POST){
        $nombre=$_POST['nombre'];

        echo 'Hola ' . $nombre . ' Tus datos fueron recibidos y mostrados desde php';  
    } else {
        header('Location: http://localhost/curso%20php/Entregable1/');
    }

?>