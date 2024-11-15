<?php



$fristString =  "hello world";

$secString = "hello";

if(preg_match("/$secString/",$fristString)){
    echo "the first string contain the second string";
}else{
    echo "the second string not exist in fisrt string";
}