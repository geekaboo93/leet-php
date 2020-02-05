<?php
/**
 * @param Integer $num
 * @return Integer
 */
function maximum69Number($num)
{
    $num = (string)$num;

    $arr = [];
    $group = [];

    array_push($group, $num);
    for ($i = 0; $i < strlen($num); $i++) {
        array_push($arr, (int)$num[$i]);
    }

    foreach ($arr as $node => $val) {
        $temp = $arr;
        for ($i = 0; $i < strlen($num); $i++) {
            if ($i == $node) {
                $temp[$i] = $val == 6 ? 9 : 6;
            }
        }
        $str = implode($temp);
        array_push($group, $str);
    }

    $max = (int)$group[0];
    foreach ($group as $value) {
        if ((int)$value > $max) {
            $max = (int)$value;
        }
    }
    return $max;
}

$result = maximum69Number(9669);
print($result . "\n");
$result = maximum69Number(9996);
print($result . "\n");
$result = maximum69Number(9999);
print($result . "\n");