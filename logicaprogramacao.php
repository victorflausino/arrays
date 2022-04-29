<?php

$x = 3;
$z = 5;
$res = 0;



for($i = 0; $i < 1000; $i++){
    if($i % $x == 0 || $i % $z == 0){
        $res += $i;
    }
}
echo "A soma dos multiplos de 3 e 5 abaixo de 1000, é:  +$res"

?> 
 
