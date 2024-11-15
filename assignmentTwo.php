<?php



// the first one
echo "<hr>";
echo "The First One <br>";
for ($i=0; $i <10 ; $i++) {
    $equation = (-$i+10);
    
    if($i < 5){
        $space = str_repeat(" ", $i);
        echo $space; 
        for ($j=0; $j <$i+1 ; $j++) {
            echo "*";
        }
        echo "<br>"; 
    }else{
        $space = str_repeat(" ", $equation);
        for ($z=1; $z < $equation ; $z++) {
            echo "*";
        }
        echo "<br>";
    }
    
    
}



// the second one
echo "<hr>";
echo "The Second One <br>";
for ($i=0; $i <10 ; $i++) {
    if($i >= 5){
        for ($z=0; $z < (-$i +10) ; $z++) { 
            echo "*";
        }
        echo "<br>";
    }else{
        for ($j=0; $j <$i+1 ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    
    
}



// third one 
echo "<hr>";
echo "The Thrid One <br>";
for ($i=1; $i <= 5; $i++) {
    if($i <=3){
        $equation = (2*$i) - 1;
        for ($j=0; $j <$equation ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }else{
        $equation = (-2*$i) + 11;
        for ($z=0; $z <$equation ; $z++) { 
            echo "*";
        }
        echo "<br>";
    }
    
}