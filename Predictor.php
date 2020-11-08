<?php

declare(strict_types=1);

/**
 * 
 * Retrieve an array of words that contain the specified prefix
 * 
 * @param array $words
 * @param string $prefix
 * @return array
 * 
 */
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


//Testing the function with harcoded data
$words = ['casa','Camino','perro','Gato','nombre','dios','Colegio','iglesia','comida','pAlAcIO'];
$input = 'ca';
$matchs = findMatchs($words, $input);


//Print output in screen 
echo '<pre>';
print_r($matchs);
echo '</pre>';
