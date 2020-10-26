<?php

function existPair($array, $goal)
{
    $arraySize = count($array);
    $indexMin = 0;
    $indexMax = $arraySize - 1; 

    if ($goal >= (2*$array[$indexMax])) // Si goal beaucoup trop grand
            return 0;
    while ($indexMin < $indexMax)
    {
        var_dump($array[$indexMin] ." + ".$array[$indexMax]);
        if($array[$indexMin] + $array[$indexMax] == $goal) // Si addition exact, solution trouvé
            return 1; 
        else if($array[$indexMin] + $array[$indexMax] < $goal) // Si addition inférieur au résultat, on augmente la valeur minimal du pair
            $indexMin++;
        else // si addtion supérieur, on réduit la valeur maximal du pair
            $indexMax--;
    } 
    return 0;
}

$input = array (1, 1, 2, 3, 5, 6, 12, 13, 15, 15, 16, 18, 20, 27, 29);
$goal = 8;

$array = array_unique($input);
sort($array);
 
if(existPair($array, $goal))
    echo "Il existe une combinaison";
else
    echo "Il n\existe pas de combinaison";

?>