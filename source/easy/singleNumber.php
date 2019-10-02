<?php

function singleNumber($nums)
{
    $result = 0;

    $count = count($nums);
    for ($i = 0; $i != $count; $i++)
        $result ^= $nums[$i];

    return $result;
}

$result = singleNumber([4, 3, 3, 4, 6]);
echo $result . "\n";
$result = singleNumber([1, 2, 1, 3, 3]);
echo $result . "\n";