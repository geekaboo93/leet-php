<?php

function hammingDistance($x, $y) {
    $count = 0;
    while($x > 0 || $y > 0){
        if($x%2!=$y%2){
            $count++;
        }
        $y /= 2;
        $x /= 2;

    }
    return $count;
}
print(hammingDistance(1,4)."\n");