<?php
function sequence($n){
    $count=0;
    while($n!=1){
    if($n%2==0){
        $n=$n /2;
        $count+=1; 
    }
    else{
        $n = 3*$n + 1;
        $count+=1;
    }
}
return $count+1;
}
$max=0;
$su=0;
for($i=2;$i<1000000;$i++){
    
    
    if(sequence($i)>=$max){
        $max=sequence($i);
        $su=$i;
    }
}
echo $max;
echo $su;
  
?>