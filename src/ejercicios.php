<?php

declare(strict_types=1);

function sumArray(array $array): int {
    $sum = 0;
    for($index = 0; $index < sizeof($array); $index++){
        $sum += $array[$index];
    }

    return $sum;
}

function findMax(array $array): int {
    $max = $array[0];
    for ($index = 0 ; $index <= count($array)-1 ; $index++) {
        if ($array[$index] > $max) {
            $max = $array[$index];
        }
    }
    return $max;
}

function averageAge(array $people): int {
    $sum = 0;
    foreach($people as $person) {
        $sum += $person["age"];
    }
    $totalAge = $sum / count($people);
    return $totalAge;
}

function reverseString (string $string): string { // $tring = Hola qué tal
    $chars = mb_str_split($string);
    
    return implode('', array_reverse($chars));
}

function reverseWords (string $string): string {
    $words = explode(' ', $string);

    return implode(' ', array_reverse($words));
}

function reverseCharactersInWords (string $string): string {
    $words = explode(' ', $string);

    $turnWords = [];

    foreach($words as $word) {
        $turnWords[] = reverseString($word);
    }

    return implode(' ', $turnWords);
}
