<?php
function estpolyndrom($x){ 
    if (strrev (strval($x)) == strval($x)){ 
        return true; 
    }
    else{
        return false;
    }
} 

$max=0;
for($a=999;$a>99 ;$a--){
    for($b=999;$b>99;$b--){
        $c=$a*$b;
        
        if(estpolyndrom($c) && $c>=$max){
            $max=$c;
        }
         
        
     
        

    }
}
   

echo $max;
?>
