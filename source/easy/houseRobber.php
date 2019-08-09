<?php

function rob($nums)
{
    if (count($nums) === 0) {
        return 0;
    }
    $total[] = count($nums);
    $total[0] = $nums[0];
    for ($i = 1; $i < count($nums); $i++) {
        if ($i == 1)
            $total[$i] = max($nums[0], $nums[1]);
        else
            $total[$i] = max($total[$i - 1], $total[$i - 2] + $nums[$i]);
    }
    return $total[count($nums) - 1];
}

$result = rob(array(2, 7, 9, 3, 1));
echo $result . "\n";
$result = rob(array(1, 2));
echo $result . "\n";
$result = rob(array(3, 3, 3, 3, 3, 3));
echo $result . "\n";
$result = rob(array(7));
echo $result . "\n";
$result = rob(array(2, 1, 1, 2));
echo $result . "\n";