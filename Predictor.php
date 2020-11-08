<?php

declare(strict_types=1);


function findMatchs(array $words, string $prefix) : array {    
    
    $matchs = array();

    $prefix = strtolower($prefix);
    
    foreach($words as $word) {
        
        $word = strtolower($word);

        if(strpos($word, $prefix) === 0) {
            if(!in_array($word, $matchs)) {
                array_push($matchs, $word);
            }
        }
    }
    return $matchs;
}


$words = ['casa','Camino','peRRo','gato','nombre','dios','Colegio','iglesia','comida','palacio',];
$input = 'ca';
$matchs = findMatchs($words, $input);

echo '<pre>';
print_r($matchs);
echo '</pre>';
