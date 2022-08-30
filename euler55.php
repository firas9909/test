<?php
function estpolyndrom($x){ 
    if (strrev (strval($x)) == strval($x)){ 
        return true; 
    }
    else{
        return false;
    }
} 
function nonLychrel($x){
    

    $count=0;
    $y=strrev($x);
    $z=$x+$y;
    while($count<50){
     
    if(estpolyndrom($z)){
        return true;
    }
    $count++;
    $v=intval(strrev($z));
    $z=$z+$v;
}
return false;

    


    }

$sum=0;  
for($i=1;$i<10000;$i++){
    if(!nonLychrel($i)){
    $sum++;
    }
}  
echo $sum;




?>