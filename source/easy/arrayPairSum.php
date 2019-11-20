<?php

function arrayPairSum($nums) {
    $result = 0;
    if(count($nums) == 0) return 0;
    sort($nums);
    for($i=0; $i < count($nums); $i+=2) {
        $result+=$nums[$i];
    }

    return $result;
}
print(arrayPairSum([1,4,3,2])."\n");
