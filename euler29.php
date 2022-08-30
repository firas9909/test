<?php
$terms = array();

for($a = 2; $a <= 100; $a++)
{
    for($b = 2; $b <= 100; $b++)
    {
        
        $terms[] = bcpow($a, $b);
        
    }
}


$terms = array_unique($terms);


//print_r($terms);
print "\n" . count($terms);

?>