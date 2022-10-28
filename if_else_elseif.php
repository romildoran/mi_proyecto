<?php

//condicionales
$a=5;
$b=3;

echo "Primer parrafo"."<br>";

if ($a<$b){
    echo "Segundo parrafo"."<br>";
}else{
    echo "Segundo parrafo modificado"."<br>";
}

echo "Tercer parrafo"."<br>";

//anidar condicionales
echo "<br>";

$a=5;
$b=5;

if ($a>$b){
    echo "El valor de a es mayor que el valor de b"."<br>";
}elseif($a<$b){
    echo "El valor de a es menor al valor de b"."<br>";
}else{
   echo "El valor de a es igual al valor de b"."<br>"; 
}

?>