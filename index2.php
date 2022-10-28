<?php
//tipos de datos
    //datos enteros
    $numero=123;
        echo "valores enteros ".$numero."<br>";
    //valores decimales, usando punto
    $decimal =1.23;
        echo "valores decimales ".$decimal."<br>";
    //strings o cadenas
    $cadena = "Hola mundo, mi nombre es : 'Ronald Duarte' y tengo \"36\" años de edad"."<br>";
        echo $cadena."<br>";
    //datos de tipos booleanos true y false
    $bool=true;
        echo "valores booleanos 'true': ".$bool."<br>";
    $boolf=false;
        echo "valores booleanos 'false': ".$boolf."<br>";

    echo "<br>";
    //operadores matematicos y de asignacion
    $a=2;
    $b=5;

    $c=$a+$b;
        echo $c."<br>";
    $c=$a-$b;
        echo $c."<br>";
    $c=$a*$b;
        echo $c."<br>";
    $c=$a/$b;
        echo $c."<br>";

    echo "<br>";    
    //operador "modulo": devuelve el residuo de la division entre dos numeros
    $c=$a%$b;
        echo $c."<br>";
        
    echo "<br>";
    //operadores de comparacion
    $a=10;
    $b=5;

    echo $a==$b;
    var_dump($a==$b);

    echo $a<>$b;
    var_dump($a<>$b);

    echo $a!=$b;
    var_dump($a!=$b);

    echo $a>$b;
    var_dump($a>$b);

    echo $a<$b;
    var_dump($a<$b);

    echo $a>=$b;
    var_dump($a>=$b);

    echo $a<=$b;
    var_dump($a<=$b);

    echo "<br>";
    //operadores logicos
    $a=true;
    $b=true;
    var_dump($a&&$b);

    $a=true;
    $b=false;
    var_dump($a&&$b);

    $a=false;
    $b=false;
    var_dump($a&&$b);

    $a="Hola Mundo";
    $b=45;
    var_dump($a&&$b);

    $a="";
    $b=45;
    var_dump($a&&$b);
    
    $a="Hola Mundo";
    $b=0;
    var_dump($a&&$b);

    $a="Hola Mundo";
    $b=null;
    var_dump($a&&$b);

    echo "<br>";
    
    $a=true;
    $b=true;
    var_dump($a||$b);  
    
    $a=false;
    $b=false;
    var_dump($a||$b);
   
    $a=4;
    $b=5;
    $c=6;
    var_dump($a<$b||$b>$c);

    
?>