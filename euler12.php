<?php

function divise($s){
    $nb=0;
    for($j=2;$j<=(int)($s/2);$j++){
if($s%$j==0){
    $nb++;
    }
}
return$nb+2;
}




$bl=false;
$a=0;
$i=1;
while($a<100000000&&$i<1000000&&$bl==false){
    echo "$a------\n";
    if(divise($a)>500){
        $bl=true;
        echo $a;
    }
    $a+=$i;
    $i++;
    
}

 


    
        
    


    
?>