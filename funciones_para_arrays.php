<?php

// $array=[1,2,3];

/* $a=$array[0];
$b=$array[1];
$c=$array[2]; */

// list($a,$b,$c)=$array; 

// echo $b;

// $array=range(10,20);

// var_dump($array);

// echo $array [5];

// echo count($array);

/* $array=['victor','pamela','elizabeth', 'iris'];

if (in_array('elizabeth', $array)){
    echo "El valor buscado se encuentra dentro del array";
}
else{
    echo "El valor buscado no se encuentra dentro del array";
} */

//borrar un elemento del array

$array=['victor','pamela','elizabeth', 'iris'];
    unset($array[2]);
if (in_array('elizabeth', $array)){
    echo "El valor buscado se encuentra dentro del array";
}
else{
    echo "El valor buscado no se encuentra dentro del array";
}
