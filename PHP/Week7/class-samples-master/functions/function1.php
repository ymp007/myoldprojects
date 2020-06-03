<?php
//declare a function
function add($num1, $num2){
    return $num1 + $num2;
}

echo add(3,4);

//function overloading with default or oprional params

function add2($num1, $num2 = null){
    if(!isset($num2)){
        return $num1;
    }
    return $num1 + $num2;
}
add2(1);
add2(4,6);

function add3($num1, $num2 = 5){
    return $num1 + $num2;
}
add3(1);
add3(4,6);
