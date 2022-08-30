<?php

/*
$fn = fopen('euler15.txt', 'r');

for($k=0;$k<20;$k++){
	$result = fgets($fn);
	$mat[]=explode(" ",$result);
	
  }





$tab=array();
$tab1=array();

for($q=0;$q<80000;$q++){  

  $k=0;
  $j=0;
  
  $ch='';
  while($k<7&&$j<7){
    
 
  $tab=array("d","r");
  $b=array_rand($tab);
  
  
  if($b==1){
      
      $j++;
      
     $ch=$ch.'r';
  }
  if($b==0){
      $k++;
      
      $ch=$ch.'d';
    
  
  }
  
  
}

  while(strlen($ch)<=13){
  if($k==7){
    $ch=$ch.'r';
  }
  if($j==7){
    $ch=$ch.'d';
  }
  
}


$count=0;
for($f=0;$f<count($tab1);$f++){
    
    
if($tab1[$f]==$ch){
    $count++;

}



}
if($count==0){
    array_push($tab1,$ch);
}

}
print_r($tab1);
*/
$fn = fopen('euler15initiale.txt', 'r');

for ($k = 0; $k < 20; $k++) {
    $result = fgets($fn);
    $M[] = explode(' ', $result);
}

$i = 3;
while ($i < 20) {
    $k = 0;
    while ($k < $i) {
        if ($k < 1) {
            for ($j = 0; $j < $i; $j++) {
                $M[$i][0] += $M[$i - 1][$j] * 2;
                $M[$i][1] += $M[$i - 1][$j];
            }
        }
        if ($k >= 2) {
            for ($k = 2; $k < $i; $k++) {
                for ($j = $k - 1; $j < $i; $j++) {
                    $M[$i][$k] += $M[$i - 1][$j];
                }
            }
        }
        $k++;
    }
    $i++;
}

print_r($M);

$sum = 0;
for ($p = 0; $p < 20; $p++) {
    $sum += $M[19][$p];
}
echo $sum * 2;





?>
