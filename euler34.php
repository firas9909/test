<?php

    function factorille($n){ 
        $f = 1; 
        for ($i = 1; $i <= $n; $i++){ 
          $f = $f * $i; 
        } 
        return $f; 
      } 
$a=factorille(0);
$a=1;

      function curieux(string $ch){
      $arr1 = str_split($ch);
      $a=intval($ch);
      $sum=0;
  
      foreach($arr1 as $k){
          $sum+=factorille($k);
      }
    if($sum==$a){
        return true;
    }
    return false;
}


$su=0;
for($i=1;$i<=100000;$i++){
    if(curieux($i)){
        $su+=$i;
    }
}
echo $su;



?>