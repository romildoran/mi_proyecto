<?php

//bucle for

$filas=10;

for($i=1; $i<=$filas; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

//bucles for each
$nombres=['Victor', 'Iris', 'Elizabeth', 'Joel'];

foreach( $nombres as $posicion => $nombre){
    echo $nombre.' se encuentra en el indice: '. $posicion. '<br>';

}
echo "<br>";
//break
echo "break"."<br>";

/* for($i=1; $i<=20; $i++){
    if ($i==11){
      break;  
    }
    echo $i ."<br>";
}
echo "saliste del bucle"; */

//ignorar una iteracion
for($i=1; $i<=20; $i++){
    if ($i==7 || $i==15){
      continue;  
    }
    echo $i ."<br>";
}
echo "saliste del bucle"."<br>";
echo "<br>";

//terminar del programa con la sentencia exit o con la sentencia die
for($i=1; $i<=20; $i++){
    if ($i==7 || $i==15){
      exit;  
    }
    echo $i ."<br>";
}
echo "saliste del bucle"."<br>";
?>