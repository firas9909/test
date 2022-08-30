<?php
function triplet($a,$b,$c){
    if(pow($a,2)+pow($b,2)==pow($c,2)){
        return true;
    }
    else{
        return false;
    }
}

$bl=false;
for($i=1;$i<=1000&&$bl==false;$i++){
    for($j=1;$j<=1000;$j++){
        for($k=1;$k<=1000;$k++){
            if(triplet($i,$j,$k)&&$i+$j+$k==1000){
                $a=$i*$j*$k;
                $bl=true;

                echo "$a----\n";

            }
        }
    }
}


?>