<?php

//passing value by value and reference
function add($num1, &$num2){
    $num2 = 45;
    return $num1 + $num2;
}

$n1 = 20;
$n2 = 40;
//echo "Num2 to before function " . $n2;
 add($n1,  $n2);
//echo "   Num2 to after function " . $n2;

//global scope and functional scope
$a = 25;

function showA(){
   global $a;
   echo $a;
   $a = 46;
}

showA();

echo $a;