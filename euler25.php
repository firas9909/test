<?php

function addition(string $ch, string $ch1)
{
    //initialisation des deux compteurs sur les deux chaines
    // valeur initiale pour b (compteur sur la chaine 'ch') indice du dernier char dans ch
    // valeur initiale pour c (compteur sur la chaine 'ch1') indice du dernier char dans ch1
    $longCh = strlen($ch) - 1;
    $longCh1 = strlen($ch1) - 1;
    
    
    //
    // boucle qui a objectif pour parcourir ch(sur la quelle on va subir des changements)
    //
    while ($longCh >= 0) {
        //addition des dizaines et des unités
        // exemple : 36 Et 63

        

        // on va commencer l'addition de droite comme on fait si on va faire un calcule sur papier
        $s = intval($ch[$longCh]);
        // c'est la valeur resultat de l'addition des deux chiffres
        //$s=integer(e5er element fel chaine)

         
        if ($sum > 9) {
            $q = implode(' ', $tab);
            $s = $s + intval($q);
            unset($tab[count($tab) - 1]);
        }
        if ($longCh1 >= 0) {
            $sum = $s + intval($ch1[$longCh1]);
        } else {
            $sum = $s;
        }
        if ($sum <= 9) {
            $ch[$longCh] = strval($sum);
        } else {
            $tab = array('1',);
            switch ($sum) {
                case 10:
                    $ch[$longCh] = '0';
                    break;
                case 11:
                    $ch[$longCh] = '1';
                    break;
                case 12:
                    $ch[$longCh] = '2';
                    break;
                case 13:
                    $ch[$longCh] = '3';
                    break;
                case 14:
                    $ch[$longCh] = '4';
                    break;
                case 15:
                    $ch[$longCh] = '5';
                    break;
                case 16:
                    $ch[$longCh] = '6';
                    break;
                case 17:
                    $ch[$longCh] = '7';
                    break;
                case 18:
                    $ch[$longCh] = '8';
                    break;
                case 19:
                    $ch[$longCh] = '9';
                    break;
            }
        }
        $longCh--;
        $longCh1--;
        if($longCh==$longCh1 && $longCh==-1 && $sum>9){
            $ch='1' .$ch;
            return $ch;

        }
    } //fin while

    //
    // if ch[0] + ch1[0] > 9 ajout 1 a gauche
    //
    

    return $ch;
}

print_r(addition('9', '9'));

$ch3='0';
$ch4='1';
   $tab1=array();
   $tab1[]=1;
$tab1[]=1;
    
        $w='';
        $longChl=false;
        while($longChl==false){
            $w = addition($ch4,$ch3);
            $ch3 = $ch4;
            $ch4 = $w;
            $tab1[]=$w;
            if(strlen($w)==1000){
                $longChl=true;
                
               
                
            }
            
        }
        
        print_r($tab1);


    
        
        
?>
