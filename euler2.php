<?php
$x=0;
$y=1;
$w=0;
   $tab1=array();
   $tab1[]=1;
$tab1[]=1;
    
        
        
 while($w<4000000){       
            $w = $x+$y;
            $x = $y;
            $y = $w;
            $tab1[]=$w;
 }

print_r($tab1);
$sum=0;
foreach($tab1 as $k){
    if($k%2==0){
        $sum+=$k;
    }
}
echo $sum;



?>