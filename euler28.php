<?php

$su=0;
for($i=3;$i<=1001;$i=$i+2){
    $a=pow($i,2);
    echo"$a\n";
    $su+=$a;
}
echo $su;

$j=1;
$sum=0;
for($l=2;$l<=4000;$l=$l+8){
$j+=$l;
$sum+=$j;
echo "$j\n";
}
echo$sum;

$z=1;
$suma=0;
for($h=6;$h<=4000;$h=$h+8){
$z+=$h;
$suma+=$z;
echo "$z\n";
}
echo$suma;

$e=1;
$sumb=0;
for($d=4;$d<=4000;$d=$d+8){
$e+=$d;
$sumb+=$e;
echo "$e\n";
}
echo"$sumb\n";


echo $su+$sum+$suma+$sumb;
?>