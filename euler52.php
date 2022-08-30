<?php


function mp($x,$w){
    $y=$x*$w;
    $ch='';
    $a=strval($y);
    for($i=0;$i<strlen($a);$i++){
        $ch=$ch.$a[$i];
    }
    return $ch;


}
$x=142857;
$bl=false;
while($x>=142857&&$bl==false){
    $p=0;
$ch1=mp($x,1);
$ch2=mp($x,2);
$ch3=mp($x,3);
$ch4=mp($x,4);
$ch5=mp($x,5);
$ch6=mp($x,6);
$count=0;

for($i=0;$i<strlen($x);$i++){
    for($j=0;$j<strlen($x);$j++){
        if($ch1[$i]==$ch2[$j]){
            $count++;
        }

    }

}
if($count==strlen($x)){
    $p++;
}
$count=0;
for($i=0;$i<strlen($x);$i++){
    for($j=0;$j<strlen($x);$j++){
        if($ch1[$i]==$ch3[$j]){
            $count++;
        }

    }

}
if($count==strlen($x)){
    $p++;
}

$count=0;
for($i=0;$i<strlen($x);$i++){
    for($j=0;$j<strlen($x);$j++){
        if($ch1[$i]==$ch4[$j]){
            $count++;
        }

    }

}
if($count==strlen($x)){
    $p++;
}
$count=0;
for($i=0;$i<strlen($x);$i++){
    for($j=0;$j<strlen($x);$j++){
        if($ch1[$i]==$ch5[$j]){
            $count++;
        }

    }

}
if($count==strlen($x)){
    $p++;
}
$count=0;
for($i=0;$i<strlen($x);$i++){
    for($j=0;$j<strlen($x);$j++){
        if($ch1[$i]==$ch6[$j]){
            $count++;
        }

    }

}
if($count==strlen($x)){
    $p++;
}
if($p=strlen($x)-1){
    $bl=true;
    echo $x;
}
$x++;
}





    
    
        

?>