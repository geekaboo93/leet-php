<?php
/**
 * @param Integer $left
 * @param Integer $right
 * @return Integer[]
 */
function selfDividingNumbers($left, $right)
{
    $result = [];
    for ($i = $left; $i <= $right; $i++) {
        $tmp = $i;
        $self_divided  = true;
        while(intval($tmp) != 0) {
            $num = $tmp % 10;
            if ($num == 0 || $i % $num != 0) {
                $self_divided = false;
                break;
            }
            $tmp /= 10;
        }
        if($self_divided) {
            array_push($result,$i);
        }
    }
    return $result;
}

$result = selfDividingNumbers(1, 22);
print_r($result);
