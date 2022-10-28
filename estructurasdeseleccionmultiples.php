<?php
//estructura algoritmica de seleccion multiples

$a=6;

/* if($a==1){
    echo "lunes"."<br>";
}elseif($a==2){
    echo "martes"."<br>";
}elseif($a==3){
    echo "miércoles"."<br>";
}elseif($a==4){
    echo "jueves"."<br>";
}elseif($a==5){
    echo "viernes"."<br>";
}elseif($a==6){
    echo "sábado"."<br>";
}elseif($a==7){
    echo "domingo"."<br>";
} */

/* switch($a){
    case 1:
        echo "lunes"."<br>";
        break;
    case 2:
        echo "martes"."<br>";
        break;
    case 3:
        echo "miércoles"."<br>";
        break;
    case 4:
        echo "jueves"."<br>";
        break;
    case 5:
        echo "viernes"."<br>";
        break;
    case 6:
        echo "sábado"."<br>";
        break;
    case 7:
        echo "domingo"."<br>";
        break;
    default:
        echo "El valor de la variable no es un valor valido"."<br>";
        break;
} */

//estructura match

echo match($a){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo",
    default=>"El valor de la variable no es un valor valido",
};

?>