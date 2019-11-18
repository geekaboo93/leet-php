<?php

function balancedStringSplit($s)
{
    $balance = 0;
    $result = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == 'L') {
            $balance++;
        } else {
            $balance--;
        }
        if ($balance == 0) {
            $result++;
        }
    }
    return $result;
}
print(balancedStringSplit("RLRRLLRLRL")."\n");
print(balancedStringSplit("RLLLLRRRLR")."\n");
print(balancedStringSplit("LLLLRRRR")."\n");
print(balancedStringSplit("RLRRRLLRLL")."\n");