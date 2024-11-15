<?php


function asec($array){
    $temp = 0;
    for ($i=0; $i <count($array) ; $i++) { 
        for ($j=$i+1; $j <count($array) ; $j++) { 
            if ($array[$j] < $array[$i]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
        
    }
    return $array;
}
function desc($array){
    $temp = 0;
    for ($i=0; $i <count($array) ; $i++) { 
        for ($j=$i+1; $j <count($array) ; $j++) { 
            if ($array[$j] > $array[$i]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
        
    }
    return $array;
}


$array = [2,4,3,1,6,7,5,8,0,9];

$asecArray = asec($array);
$descArray = desc($array);

print_r($asecArray);
echo "<hr>";
print_r($descArray);