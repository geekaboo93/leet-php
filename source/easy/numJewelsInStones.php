<?php

/**
 * @param String $J
 * @param String $S
 * @return Integer
 */
function numJewelsInStones($J, $S) {
    $j_count = 0;
    $jewels = array_unique(str_split($J));
    $stones = str_split($S);

    foreach($stones as $stone) {
        if(in_array($stone,$jewels)) {
            $j_count += 1;
        }
    }
    return $j_count;
}

$result = numJewelsInStones("aA","aAAbbbb");
echo $result . "\n";
$result = numJewelsInStones("z","ZZ");
echo $result . "\n";