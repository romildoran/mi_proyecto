<?php
//bucles while y do while
$i=8;

/* while ($i<=10){
    echo "Hola mundo $i <br>";
    $i++;
}
echo "Has salido del bucle"; */

/* do{
    echo "Hola Mundo <br>";
    $i++;
}while($i<=10); */

$base=8;
$expo=5;
$resultado=1;
$i=1;

while($i=$expo){
    $resultado= $resultado * $base;
    $i++;
}
echo "El valor de $base elevado a la $expo es: ".$resultado;
?>
