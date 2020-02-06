<?php

/**
 * @param Integer $n
 * @return Integer[]
 */
function sumZero($n)
{
    $result = [];
    if ($n % 2 == 0) {
        for ($i = 0; $i < $n - 1; $i += 2) {
            $result[$i] = $i + 1;
            $result[$i + 1] = -$i - 1;
        }
    } else {
        $result[0] = 0;
        for ($i = 1; $i <= $n - 2; $i += 2) {
            $result[$i] = $i;
            $result[$i + 1] = -$i;
        }
    }
    return $result;
}


$result = sumZero(5);
print(json_encode($result)."\n");
$result = sumZero(3);
print(json_encode($result)."\n");
$result = sumZero(1);
print(json_encode($result)."\n");