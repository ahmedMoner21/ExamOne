<?php

$flag = false;

function checkPrimeNumber($number){
   for($i = 2; $i< $number/2; $i++){ // number / 2 becuase the number more than this will not be dividors
        if($number % $i == 0){
            $flag = true;
        }
   }
}


$number = 3;

checkPrimeNumber($number);

// true then the codition in the function is true then number has onther dividors 
if($flag == true){
    echo "number $number is not prime";
}else{
    echo "number $number is prime";
}