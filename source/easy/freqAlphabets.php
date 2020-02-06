<?php
/**
 * @param String $s
 * @return String
 */
function freqAlphabets($s)
{
    if (strlen($s) < 1)
        return '';

    $mapped = ['1' => 'a', '2' => 'b', '3' => 'c', '4' => 'd', '5' => 'e', '6' => 'f', '7' => 'g', '8' => 'h', '9' => 'i',
        '10#' => 'j', '11#' => 'k', '12#' => 'l', '13#' => 'm', '14#' => 'n', '15#' => 'o', '16#' => 'p', '17#' => 'q', '18#' => 'r',
        '19#' => 's', '20#' => 't', '21#' => 'u', '22#' => 'v', '23#' => 'w', '24#' => 'x', '25#' => 'y', '26#' => 'z'];

    $arr = [];

    for ($i = 0; $i < strlen($s); $i++) {
        array_push($arr, $s[$i]);
    }

    $result = [];
    foreach ($arr as $key => $val) {
        $tmp_str = '';
        if ($val != '#') {
            array_push($result, $mapped[$val]);
        } else {
            $tmp_str .= $mapped[$arr[$key - 2] . $arr[$key - 1] . $val];
            unset($result[$key - 2]);
            unset($result[$key - 1]);
            unset($result[$key]);
            array_push($result, $tmp_str);
        }
    }

    return implode("", $result);
}

$result = freqAlphabets("10#11#12");
print($result . "\n");
$result = freqAlphabets("1326#");
print($result . "\n");
$result = freqAlphabets("25#");
print($result . "\n");
