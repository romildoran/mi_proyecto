<?php
//operadores ternarios

$a=5;
$b=5;

/* if ($a>$b){
    echo "El valor de a es mayor que el valor de b"."<br>";
}elseif($a<$b){
    echo "El valor de a es menor al valor de b"."<br>";
}else{
    echo "El valor de a es igual al valor de b"."<br>"; 
} */

$valor=$a>$b?'mayor' :($a>$b?'menor':'igual');
    echo "El valor de a es ".$valor." que el valor de b";
?>