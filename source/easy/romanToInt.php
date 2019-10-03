<?php
/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $s_length = strlen($s);
    $result = 0;

    if($s_length === 0) return $result;

    $ref_table = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    for($i=$s_length; $i >= 0; $i--) {
        $cur = $ref_table[$s[$i]];
        $next = $ref_table[$s[$i+1]];

        if($cur < $next) {
            $result -= $cur;
        } else {
            $result += $cur;
        }
    }
    return $result;
}

$result = romanToInt('MCMXCIV');
var_dump($result);
$result = romanToInt('LVIII');
var_dump($result);
