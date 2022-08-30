<?php
//code d'ascci de chaque lettre
function toNum($data)
{
    $alphabet = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z',
    ];
    $alpha_flip = array_flip($alphabet);
    if (strlen($data) == 1) {
        return isset($alpha_flip[$data]) ? $alpha_flip[$data] : false;
    } elseif (strlen($data) > 1) {
        $num = 1;
        for ($i = 0; $i < strlen($data); $i++) {
            if ($i + 1 < strlen($data)) {
                $num *= 26 * ($alpha_flip[$data[$i]] + 1);
            } else {
                $num += $alpha_flip[$data[$i]] + 1;
            }
        }
        return $num + 25;
    }
}
//fonction qui permet  de count la somme du code d'ascii d'une chaine pour l'utiliser plus tard a chaque tab[i]
function countlettre(string $ch)
{
    $su = 0;
    $arr1 = str_split($ch);

    for ($i = 0; $i < count($arr1); $i++) {
        $a = toNum($arr1[$i]) + 1;
        $su += $a;
    }
    return $su;
}
//convertire fichier text to  tab
$fopen = fopen('euler22.txt', 'r');
$ch = file_get_contents('euler22.txt');
$tab = explode(',', $ch);
sort($tab);

//deltete chaque " de chaque nom  (remplacer " par le vide car il y a pas fonction delete dans un tableau)
foreach ($tab as $k) {
    $tab = str_replace('"', '', $tab);
}

$sum = 0;

for ($j = 0; $j <= 5162; $j++) {
    $sum += ($j + 1) * countlettre($tab[$j]);
}
echo $sum;

?>

