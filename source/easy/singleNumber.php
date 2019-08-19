<?php

function singleNumber($nums) {
    $count = count($nums);
    for ($i = 0; $i < $count; $i++)
    {
        for ($j = 0; $j< $count; $j++)
            if ($i != $j && $nums[$i] == $nums[$j])
                break;
        if ($j == $count)
            return $nums[$i];
    }
    return -1;
}
$result = singleNumber([4,3,3,4,6]);
print_r($result);
$result = singleNumber([1,2,1,3,3]);
print_r($result);