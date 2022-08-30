<?php
set_time_limit(0);
ini_set('memory_limit', '2G');
$time_start = microtime(true);
$tab=array();
$tab1=array();
$tab2=array();
for($t=54000;$t<57000;$t++){
    $T=$t*($t+1)/2;
    $tab[]=$T;
}


for($p=29000;$p<33000;$p++){
    $P=$p*(3*$p-1)/2;
    $tab1[]=$P;
}


for($h=28000;$h<30000;$h++){
    $H=$h*(2*$h-1);
    $tab2[]=$H;
}
print_r($tab2);

foreach($tab as $i){
    foreach($tab1 as $j){
        foreach($tab2 as $k){
            if($i==$j){
                echo "$i\n";
            }

        }
    }

}

$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo  $execution_time . 'seconds';

exit;



?>