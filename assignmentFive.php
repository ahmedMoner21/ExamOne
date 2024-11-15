<?php




function Filter($array):mixed{

    for ($i=0; $i <count($array) ; $i++) { 
        // check if the number accept the division on two or not then filter it
        if($array[$i] % 2 == 0){
            unset($array[$i]);
        }
    }
    return $array;
}


$array = [2,4,3,1,6,7,5,8,0,9];

$filteredArray = Filter($array);
print_r($filteredArray);
