<?php
function estpremier($x)
{
    for ($i = 2; $i < (int)($x/2); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}
$sum=0;
for($i=2;$i<=2000000;$i++){
    if(estpremier($i)){
        echo "$i---------\n";
        $ch=strval($i);
        $sum+=$i;
    }
}
echo $sum;


?>
