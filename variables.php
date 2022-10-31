<?php

$a = 5;
$b = 10;

$c = &$a;
$d = &$b;


$c += 10;
$d += 10;

echo $a . "<br/>"; // 15
echo $b . "<br/>"; // 20

echo "<br/>";

//

$a = 5;
$b = 10;

function test(&$n){
    $n=$n+10;
}
test($a);
test($b);

echo $a."<br/>";
echo $b."<br/>";


?>
