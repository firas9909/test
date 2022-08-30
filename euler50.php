<?php
function estpremier($x)
{
    while($x!=0 && $x!=1){
    for ($i = 2; $i <$x; $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}
}

$sum=0;
$max=0;
$j=2;
while($j>=2&& $sum<=1000000){
    if(estpremier($j)){
        $sum+=$j;
        echo"$sum\n";
    }
    

    $j++;
}



?>