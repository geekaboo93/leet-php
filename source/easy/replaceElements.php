<?php
/**
 * @param Integer[] $arr
 * @return Integer[]
 */
function replaceElements($arr) {
    for($i = count($arr)-1, $mx = -1; $i >=0; $i--) {
        $mx = max($arr[$i], $arr[$i] = $mx);
    }
    return $arr;
}
$result = replaceElements([17,18,5,4,6,1]);
print(json_encode($result)."/n");
