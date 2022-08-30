<?php
function estpremier($x)
{
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}
$tab=array();
$count=0;
$bl=false;
for($i=2;$i<=10000000&&$bl==false;$i++){
    if(estpremier($i)){
        $count++;

    }
    if($count==10001){
        $bl=true;
        echo $i;

    }
}

?>
