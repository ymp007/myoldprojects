<?php
//$country = array('USA','CANADA','JAPAN');
$country = ['USA','CANADA','JAPAN'];

$country[11] = "China";

array_push($country, 'India', 'Brazil');

//for($i=0; $i < count($country); $i++){
//    echo "<li>" . $country[$i] . "</li>";
//
//}

$numbers = [1,2,4,[5,6,7]];

echo $numbers[3][1];

foreach($country as $key => $value ){
    echo "<li>" . $key . " : " . $value . "</li>";
}