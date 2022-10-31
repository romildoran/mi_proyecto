<?php

//cadena de caracteres

$cadena = "aeiou";
//recuperar el valor de un digito de la cadena
    echo $cadena[2]."<br>";
//saber el tamaño de una cadena
    echo strlen($cadena)."<br>"; //nos devuelve la cantidad de bits de una cadena
    echo mb_strlen($cadena)."<br>";//nos devuelve la cantidad de caracteres que tiene la cadena
    echo strpos($cadena, 'i')."<br>";//nos devuelve el lugar en una cadena que ocupa un caracter buscado