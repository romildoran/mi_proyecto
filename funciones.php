<?php
//funciones

/* function factorial(){
    $resultado = 1;
    for ($i=1;$i<=9;$i++){
        $resultado = $resultado * $i;
    }
    echo "El factorial de 9 es: ".$resultado;
}
factorial()."<br>";

echo "<br>"; */
/* 
function factorial($n){
    $resultado = 1;
    for ($i=1;$i<=$n;$i++){
        $resultado = $resultado * $i;
    }
    echo "El factorial de $n es: ".$resultado;
}
factorial(6)."<br>"; */

function factorial($n){
    $resultado = 1;
    for ($i=1;$i<=$n;$i++){
        $resultado = $resultado * $i;
    }
    return $resultado;
}
$resultado=factorial(9)."<br>";

echo "El factorial de 9 es: ".$resultado;

echo "<br>";

function valoracion ($nombre, $rating=5){
    echo "El $nombre tiene un rating de $rating"."<br>";
}
valoracion("Curso de PHP 8 desde cero", 4);

echo "<br>";

function concatenar(...$palabras){
    $resultado="";
    foreach($palabras as $palabra){
        $resultado.=$palabra." ";
    }
    echo $resultado;
}
concatenar('Curso', 'PHP', '8', 'desde', 'cero');
echo "<br>";



?> 