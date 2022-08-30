<?php
$tab=array();
for($i=0;$i<=1000;$i++){
    $tab[]=$i;
}


//change number to letter from 1 to 19
    for($i=1;$i<=19;$i++){
if ($tab[$i] <= 10) {
        switch ($tab[$i]) {
            case 1:
                $tab[$i] = 'one';
                break;
            case 2:
                $tab[$i] = 'two';
                break;
            case 3:
                $tab[$i] = 'three';
                break;
            case 4:
                $tab[$i] = 'four';
                break;
            case 5:
                $tab[$i] = 'five';
                break;
            case 6:
                $tab[$i] = 'six';
                break;
            case 7:
                $tab[$i] = 'seven';
                break;
            case 8:
                $tab[$i] = 'eight';
                break;
            case 9:
                $tab[$i] = 'nine';
                break;
            case 10:
                $tab[$i] = 'ten';
                break;
        }
    }
    if ($tab[$i] < 20) {
        switch ($tab[$i]) {
            case 11:
                $tab[$i] = 'elven';
                break;
            case 12:
                $tab[$i] = 'twelve';
                break;
            case 13:
                $tab[$i] = 'thirteen';
                break;
            case 14:
                $tab[$i] = 'fourteen';
                break;
            case 15:
                $tab[$i] = 'fifteen';
                break;
            case 16:
                $tab[$i] = 'sixteen';
                break;
            case 17:
                $tab[$i] = 'seventeen';
                break;
            case 18:
                $tab[$i] = 'eighteen';
                break;
            case 19:
                $tab[$i] = 'ninteen';
                break;
            }
        }
    }
    
//change number to letter from 20 to 99

    for($i=20;$i<=99;$i++){
        
     $a=(int)($tab[$i]/10) ;
     $b=$tab[$i]%10;  
        
        switch ($a) {
            case 2 :
                $a = 'twenty';
                break;
            case 3:
                $a = 'thirty';
                break;
            case 4:
                $a = 'forty';
                break;
            case 5:
                $a = 'fifty';
                break;
            case 6:
                $a = 'sixty';
                break;
            case 7:
                $a = 'seventy';
                break;
            case 8:
                $a = 'eighty';
                break;
            case 9:
                $a = 'ninety';
                break;
            }
            
            switch($b){
                case 1:
                    $b = 'one';
                    break;
                case 2:
                    $b = 'two';
                    break;
                case 3:
                    $b = 'three';
                    break;
                case 4:
                    $b = 'four';
                    break;
                case 5:
                    $b = 'five';
                    break;
                case 6:
                    $b = 'six';
                    break;
                case 7:
                    $b = 'seven';
                    break;
                case 8:
                    $b = 'eight';
                    break;
                case 9:
                    $b = 'nine';
                    break;

            }
            
        
    }
    /*
    //change number to letter from 100 to 999
    for($i=100;$i<=999;$i++){
        
        switch ($tab[$i][0]) {
            case 1:
                $tab[$i][0] = 'onehundred';
                break;
            case 2:
                $tab[$i][0] = 'twohundred';
                break;
            case 3:
                $tab[$i][0] = 'threehundred';
                break;
            case 4:
                $tab[$i][0] = 'fourhundred';
                break;
            case 5:
                $tab[$i][0] = 'fivehundred';
                break;
            case 6:
                $tab[$i][0] = 'sixhundred';
                break;
            case 7:
                $tab[$i][0] = 'sevenhundred';
                break;
            case 8:
                $tab[$i][0] = 'eighthundred';
                break;
            case 9:
                $tab[$i][0] = 'ninehundred';
                break;
            }
            switch ($tab[$i][1]) {
                

                case 2 :
                    $tab[$i][1] = 'twenty';
                    break;
                case 3:
                    $tab[$i][1] = 'thirty';
                    break;
                case 4:
                    $tab[$i][1] = 'forty';
                    break;
                case 5:
                    $tab[$i][1] = 'fifty';
                    break;
                case 6:
                    $tab[$i][1] = 'sixty';
                    break;
                case 7:
                    $tab[$i][1] = 'seventy';
                    break;
                case 8:
                    $tab[$i][1] = 'eighty';
                    break;
                case 9:
                    $tab[$i][1] = 'ninety';
                    break;
                }
                switch($tab[$i][2]){
                    case 1:
                        $tab[$i][2] = 'one';
                        break;
                    case 2:
                        $tab[$i][2] = 'two';
                        break;
                    case 3:
                        $tab[$i][2] = 'three';
                        break;
                    case 4:
                        $tab[$i][2] = 'four';
                        break;
                    case 5:
                        $tab[$i][2] = 'five';
                        break;
                    case 6:
                        $tab[$i][2] = 'six';
                        break;
                    case 7:
                        $tab[$i][2] = 'seven';
                        break;
                    case 8:
                        $tab[$i][2] = 'eight';
                        break;
                    case 9:
                        $tab[$i][2] = 'nine';
                        break;
    
                }
            }            

*/
print_r($tab);


?>
