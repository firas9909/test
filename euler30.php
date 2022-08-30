<?php
function cinquieme(string $ch){
    $arr1 = str_split($ch);
    $a=intval($ch);
    $sum=0;

    foreach($arr1 as $k){
        $sum+=pow($k,5);
    }
    if($sum==$a){
        return true;
    }
    return false;



}
$su=0;
for($j=2;$j<=1000000;$j++){
    if(cinquieme($j)){
        $su+=$j;
        echo "$j----\n";
    }
}
echo $su;


?>