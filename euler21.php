<?php
set_time_limit(0);
ini_set('memory_limit', '2G');
$time_start = microtime(true);
function sommedesdiviseurs($a){
    $sum=1;
    for($i=2;$i<=(int)($a/2);$i++){
        if($a%$i==0){
            $sum+=$i;
        }
    }
    return $sum;

}
$sum=0;
for($j=2;$j<10000;$j++){
    $a=sommedesdiviseurs($j);
    $b=sommedesdiviseurs($a);
    if($b==$j&&$a!=$j){
        $sum+=$j;
        $sum+=$a;

    }
}
echo $sum/2;
echo "\n";
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo  $execution_time . 'seconds';

exit;






?>
