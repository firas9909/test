<?php
$s=0;
for ($i=0;$i<1000;$i++) { 
if ($i%3==0 || $i%5==0)
  
 $s+=$i;
}
echo "la somme des entiers divisible pa 3 ou 5 est $s"




?>