<?php

declare(strict_types=1);

//int, float, string, bool, array, objet, null

function sumarenteros(int $entero1, int $entero2):int | float{
    return($entero1+$entero2)/2;
}
$resultado=sumarenteros(2, 5);

echo $resultado;