<?php

/**
 * @param Integer[] $arr
 * @return Boolean
 */
function uniqueOccurrences($arr) {
    $result = false;
    $occurrences = array_count_values($arr);
    if(count(array_unique($occurrences)) === count($occurrences)) $result = true;
    return $result;
}
$result = uniqueOccurrences([1,2,2,1,1,3]);
var_dump($result);
$result = uniqueOccurrences([1,2]);
var_dump($result);
$result = uniqueOccurrences([-3,0,1,-3,1,1,1,-3,10,0]);
var_dump($result);
