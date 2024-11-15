<?php


$max = 0;
$array = [10,30,20];


if($array[0] > $array[1]){
    if ($array[0] > $array[1]) {
        $max = $array[0];
    }
   
}elseif($array[1] > $array[2]){
    $max = $array[1];
}else{
    $max = $array[2];
}

echo " the max is $max";