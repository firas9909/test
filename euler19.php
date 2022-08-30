<?php
//36524=nbre de jour entre 1 er janvier 1901 et 31 decembre 2000
function hd ($i){
    $ans=0;
    $a=0;
    $b=365;
    $c=730;
    $d=1095;
    $e=1461;
    for($i=0;$i<36524;$i++){
        if($i>=$a&&$i<$b){
            $ans=1;
        }
        if($i>=$b&&$i<$c){
            $ans=2;
        }
        if($i>=$c&&$i<$d){
            $ans=3;
        }
        if($i>=$d&&$i<$e){
            $ans=4;
        }
        $a=$a+1461;
        $b=$b+1461;
        $c=$c+1461;
        $d=$d+1461;
        $e=$e+1461;
}


    return $ans;
}
$tab=array();

for($l=0;$l<36524;$l=$l+7){
    $tab[$l]='mardi';
    $tab[$l+1]='mercredi';
    $tab[$l+2]='jeudi';
    $tab[$l+3]='vendredi';
    $tab[$l+4]='samedi';
    $tab[$l+5]='dimanche';
    $tab[$l+6]='lundi';
}








$i=0;
$count=0;
while($i<36524){
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    if(hd($i)==4){
    $i=$i+28;
    if($tab[$i]=='dimanche'){
        $count++;
    }}
    
    else{
        $i=$i+29;
        if($tab[$i]=='dimanche'){
            $count++;
        }
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+30;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+30;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+30;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+30;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    $i=$i+31;
    if($tab[$i]=='dimanche'){
        $count++;
    }
    
}
echo $count;


?>

