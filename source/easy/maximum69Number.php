<?php
/**
 * @param Integer $num
 * @return Integer
 */
function maximum69Number($num)
{
    $max = $num;
    $str = (string)$num;

    $arr = [];
    $group = [];

    array_push($group, $str);
    for ($i = 0; $i < strlen($str); $i++) {
        array_push($arr, (int)$str[$i]);
    }

    foreach ($arr as $node => $val) {
        $temp = $arr;
        for ($i = 0; $i < strlen($num); $i++) {
            if ($i == $node) {
                $temp[$i] = $val == 6 ? 9 : 6;
            }
        }
        $str = implode($temp);

        if((int) $str > $max) {
            $max = (int)$str;
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