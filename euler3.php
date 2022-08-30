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

$a =600851475143;
$b = (int) (sqrt($a)) ;
$bl=false;
for ($i = $b; $i > 0&&$bl==false; $i--) {
    if ($a % $i == 0 && estpremier($i)) {
        $bl=true;
        echo "$i -------\n";
    }}
?>
