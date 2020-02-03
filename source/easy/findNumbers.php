<?php
/**
 * @param Integer[] $nums
 * @return Integer
 */
function findNumbers($nums)
{
    $result = 0;
    if (count($nums) > 0) {
        foreach ($nums as $num) {
            if(strlen($num) % 2 == 0) {
                $result+=1;
            }
        }
    }

    return $result;
}

$result = findNumbers([12, 345, 2, 6, 7896]);
print($result."\n");
$result = findNumbers([555,901,482,1771]);
print($result."\n");
$result = findNumbers([252]);
print($result."\n");

