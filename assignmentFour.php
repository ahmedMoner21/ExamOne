<?php


function calcAvg($array): float|int{
    $sum = 0;

    for ($i=0; $i <count($array) ; $i++) { 
        $sum += $array[$i];
    }
    $avg = $sum / count($array);
    return $avg;
}


$array = [2,4,3,1,6,7,5,8,0,9];

$avg = calcAvg($array);

echo "the avarage = $avg";