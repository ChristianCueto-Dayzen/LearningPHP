<?php

    $text = ' <> $ "" Hola todos ';

    echo htmlspecialchars($text) . '<br />'; //Permite convertir código en entidades especiales de html para evitar inyecciones de codigo
    echo trim($text).'<br />'; //elimina los espacios al inicio y al final de la cadena recibida
    echo strlen($text).'<br />'; //muestra el numero de caracteres (con espacios)
    $texto2 = substr($text,9,10); //extraer una cadena de otra cadena. texto, caracter de inicio, tamaño de la substring
    echo $texto2.'<br />';

    echo strtoupper($texto2).'<br />'; //convertir a mayusculas
    echo strtolower($texto2).'<br />';//convertir a minusculas

    $texto3 = strpos($text,'t'); //extraer la primera posición encontrada de la letra t
    echo $texto3.'<br />';

    /*Otras que podrías necesitar:
    1.- str_contains — Determine if a string contains a given substring
    2.- str_ends_with — Checks if a string ends with a given substring (Similar str_starts_with)
    3.- str_replace — Replace all occurrences of the search string with the replacement string
    4.- str_split — Convert a string to an array

    Más funciones: https://www.php.net/manual/en/function.join.php;
    */

?>