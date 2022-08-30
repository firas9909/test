<?php
function factorial($num)
{
    if($num == 0)
        return 1;
    else
        return bcmul($num, factorial($num - 1));
        
}

//print factorial(100);

print array_sum(str_split(factorial(100)));
 
 /*
$F=$x;
echo $F;
$sum = ($F/10)%10;
while(true )
{   
    //echo ($F/10)%10;
    $sum+=(($F/10)%10);
    echo "\n";
    $F = (int)($F/10);
    echo $F;

    echo "sum is $sum";
    echo "\n";
    if($F<=0)
        break;
}

echo "sum is $sum";

/*
$f=0;
foreach($str_arr as $x)
{
    echo $x;
    echo "\n";
    $f+=$x;
}

 echo $f;
*/
 /*$ch=strval($n);
 for($j=0;$j<strlen($ch);$j++){
    $a+=$ch[$i];
 }
*/

?>