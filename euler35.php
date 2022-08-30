<?php
function estpremier($x)
{
    for ($i = 2; $i < (int)($x/2); $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }
    return true;
}
function circular3($x){
    $c=0;
    $ch=strval($x);
    
    for($i=0;$i<3;$i++){
        $a=intval($ch);
        if(estpremier($a)){
        $c++;
        }
        $b=$ch[0];
        $ch[0]=$ch[1];

        $ch[1]=$ch[2];
        $ch[2]=$b;
    }
    if($c==3){
    return true;
    }
}

function circular4($x){
    $c=0;
    $ch=strval($x);

    for($i=0;$i<4;$i++){
        $a=intval($ch);
        if(estpremier($a)){
        $c++;
        }
        $b=$ch[0];
        $ch[0]=$ch[1];

        $ch[1]=$ch[2];
        $ch[2]=$ch[3];
        $ch[3]=$b;
    }
    if($c==4){
        return true
        ;
        }
}
    function circular5($x){
        $c=0;
        $ch=strval($x);

    for($i=0;$i<5;$i++){
        $a=intval($ch);
        if(estpremier($a)){
        $c++;
        }
        $b=$ch[0];
        $ch[0]=$ch[1];

        $ch[1]=$ch[2];
        $ch[2]=$ch[3];
        $ch[3]=$ch[4];
        $ch[4]=$b;
    }
    if($c==5){
        return true;
        }
}
function circular6($x){
    $c=0;
    $ch=strval($x);

    for($i=0;$i<6;$i++){
        $a=intval($ch);
        if(estpremier($a)){
        $c++;
        }
        $b=$ch[0];
        $ch[0]=$ch[1];

        $ch[1]=$ch[2];
        $ch[2]=$ch[3];
        $ch[3]=$ch[4];
        $ch[4]=$ch[5];
        $ch[5]=$b;
    }
    if($c==6){
        return true;
        }
}
$sum=13;
for($i=100;$i<1000000;$i++){
    $p=strval($i);
    if(strlen($p)==3){
        if(circular3($i)){
            $sum++;
            echo "$i\n";
        }
    }
    
    if(strlen($p)==4){
        if(circular4($i)){
            $sum++;
            echo "$i\n";
        }
    }
    
    if(strlen($p)==5){
        if(circular5($i)){
            $sum++;
            echo "$i\n";
        }
    }
    
    if(strlen($p)==6){
        if(circular6($i)){
            $sum++;
            echo "$i\n";
        }
    }
}
echo "$sum\n";

?>