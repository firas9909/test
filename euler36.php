<?php
function estpolyndrombaseten($x){ 
    if (strrev (strval($x)) == strval($x)){ 
        return true; 
    }
    else{
        return false;
    }
} 
function estpolyndrombasetwo($x){
    $y=base_convert($x, 10, 2);
    if (strrev (strval($y)) == strval($y)){ 
        return true; 
    }
    else{
        return false;
    }


}
$sum=0;
for($i=1;$i<1000000;$i++){
    if(estpolyndrombaseten($i)&&estpolyndrombasetwo($i)){
        $sum+=$i;
    }
}
echo $sum;

        

    
   


?>
