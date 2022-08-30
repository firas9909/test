<?php
function puissance($num,$n)
{
  $m=1;
  for($i=1;$i<=$n;$i++){


  
    
    
        $m=bcmul($num,$m) ;
}
return $m;
}



 print array_sum(str_split(puissance(2,1000)));
/* 2 eme methode 
$n=pow(2,1000);
$s = number_format($n);
echo $s;
echo "\n";
$str_arr = explode (",", $s);

$tab=array();
foreach($str_arr as $k){
echo"$k---\n";
$tab[]=$k;
}
print_r($tab);




$sum = 0;


foreach ($tab as $k)
for ($i = 0; $i < strlen($k); $i++){
   $sum += $k[$i];
   
}
echo"$sum";
*/  
?>