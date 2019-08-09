<?php

function titleToNumber($s)
{
    $cols = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $total_col = count($cols);
    $target = str_split($s);
    if (count($target) > 1) {
        $tmp1 = array_search($target[0], $cols) + 1;
        $tmp2 = 0;
        foreach ($target as $node => $value) {
            if ($node > 0) {
                if ($tmp1 === 1) {
                    $tmp1 = $total_col + array_search($value, $cols) + 1;
                } else {
                    $tmp1 = $tmp1 * $total_col + array_search($value, $cols) + 1;
                }
            }
        }
        return $tmp1 + $tmp2;
    } else {
        return array_search($s, $cols) + 1;
    }
}

$target = 'AG';
$result = titleToNumber($target);
echo $result . "\n";
$target = 'CW';
$result = titleToNumber($target);
echo $result . "\n";
$target = 'ZY';
$result = titleToNumber($target);
echo $result . "\n";

