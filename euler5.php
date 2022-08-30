<?php
function estdivisible($x)
{
    for ($i = 1; $i <21; $i++) {
        if ($x % $i != 0) {
            return false;
        }
    }
    return true;
}
$bl=false;
/*for($a=1;$a<3000000000&&$bl==false;$a++){
if (estdivisible($a)){
    $bl=true;
    echo"$a-----\n";

}*/
$a=0;
while($bl==false)
{
    $a++;
    if(estdivisible($a))
        $bl=true;
}

echo $a;










?>
