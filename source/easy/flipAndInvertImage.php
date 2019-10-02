<?php

/**
 * @param Integer[][] $A
 * @return Integer[][]
 */
function flipAndInvertImage($A) {
    if(count($A) < 1 || count($A) > 20) return [];

    foreach($A as $key =>  $a) {
        $temp_result=[];
        for($i = count($a) ; $i > 0; $i--) {
            $temp_result[] = $a[$i-1] == 1 ? 0 : 1;
        }
        $A[$key] = $temp_result;
    }
    return $A;
}

$result = flipAndInvertImage([[1,1,0],[1,0,1],[0,0,0]]);
print_r($result);
$result = flipAndInvertImage([[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]]);
print_r($result);