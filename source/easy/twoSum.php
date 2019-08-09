<?php
function twoSum($arr, $target)
{
    $hash = [];
    $result = [];
    foreach ($arr as $k => $v) {
        if ($v == $target) {
            array_push($result, $k);
        } else {
            $left = $target - $v;
            if ($v == $left) {
                continue;
            }
            if (isset($hash[$left])) {
                $result = [$hash[$left], $k];
            } else {
                $hash[$v] = $k;
            }
        }
    }
    return $result;
}

$result = twoSum([2, 7, 11, 15], 9);
print_r($result);
$result = twoSum([1, 3, 5, 7, 9], 14);
print_r($result);
$result = twoSum([0, 4, 3, 0], 0);
print_r($result);