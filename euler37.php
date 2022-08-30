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


function esttronquableadroite($i){
    $c=0;
    $d=strlen($i);
    for($j=0;$j<$d;$j++){
        if(estpremier($i)){
            $c++;
        }
        $i=(int)($i/10);
        

    }
    if($c==$d){
        return true;
    }
    return false;

}

function esttronquableagauche($i){
    $c=0;
    $a=1;
    $d=strlen($i);
    for($j=0;$j<$d;$j++){
        if(estpremier($i)){
            $c++;
        }
        $i=$i%pow(10,($d-$a));
        $a++;
        
        
        


    }
    if($c==$d){
        return true;
    }
    return false;

}





$k=23;
$b=0;
$sum=0;
while ($k>=23&&$b<11){
    if(esttronquableadroite($k)&&esttronquableagauche($k)){
        $b++;
        $sum+=$k;
        echo "$k\n";

    } 

$k++;
}
echo $sum;
?>
