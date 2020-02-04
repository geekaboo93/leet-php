<?php

/**
 * @param Integer[] $A
 * @return Integer[]
 */
function sortedSquares($A)
{
    $result = [];
    foreach ($A as $value) {
        $result[] = pow($value,2);
    }
    asort($result);
    return $result;
}
$result = sortedSquares([-4,-1,0,3,10]);
print_r($result);
$result = sortedSquares([-7,-3,2,3,11]);
print_r($result);