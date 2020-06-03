<?php



//annymous function
$addfun = function ($num1, $num2){
    return $num1 + $num2;
};

$addfun(5,6);


function validate($data, $function){
    return $function($data);
}

$le10 = function($num){
    return $num < 10;
};
$mul2 = function($num){
    return $num * 2;
};

validate(9, $le10);
validate(9, $mul2);
validate(9, function($num){
    return $num * 10;
});


$a = [2,4,6];
$b = 2;
$closure = function() use($b) {
    echo $b++;
};

$closure();
echo $b;

print_r(array_map(function($num){
    return $num * $num;
}, $a));



