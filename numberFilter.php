<?php
function extractNumber($string){
    $numArray = array();
    for ($i = 0; $i < strlen($string); $i++){
        if (is_numeric($string[$i])){
            array_push($numArray,$string[$i]);
        }
    }
    return $numArray;
}

function sortArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] >= $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$string = 'hpd12aq3@8w$5';
$numbersArray = extractNumber($string);
$sortedArray = sortArray($numbersArray);

// Using print_r to display the array
print_r($sortedArray);