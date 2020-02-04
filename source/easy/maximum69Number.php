<?php
/**
 * @param Integer $num
 * @return Integer
 */
function maximum69Number ($num) {
    $num = (string)$num;

    $arr = [];
    $group = [];
    $temp = [];
    for($i = 0; $i < strlen($num); $i++) {
       array_push($arr, (int)$num[$i]);
    }

    foreach($arr as $node => $val) {
        $temp = $arr;
        for($i = 0; $i < strlen($num); $i++) {
            if($i == $node) {
                $temp[$i] = switch69($val);
            }
        }
        array_push($group,$temp);
    }

    foreach($group as $array) {
        $tmp = "";
        foreach($array as $val) {
            $tmp .=$val;
        }
]    }
}

function switch69($digit) {
    if($digit == 6) {
        return 9;
    }
    return 6;
}

$result = maximum69Number(9669);
print($result."\n");
//$result = maximum69Number(9996);
//print($result."\n");
//$result = maximum69Number(9999);
//print($result."\n");