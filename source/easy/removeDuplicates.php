<?php

function removeDuplicates($nums)
{
    if (count($nums) === 0) {
        return 0;
    }
    $i = 0;
    for ($j = 1; $j < count($nums); $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }
    return $i + 1;
}

$arr = [1, 1, 2];
$result = removeDuplicates($arr);
echo $result . "\n";
$arr = [9, 9, 9];
$result = removeDuplicates($arr);
echo $result . "\n";
$arr = [0, 8, 2, 7];
$result = removeDuplicates($arr);
echo $result . "\n";