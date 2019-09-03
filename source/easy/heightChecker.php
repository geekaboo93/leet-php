<?php
function heightChecker($heights)
{
    $copy = $heights;
    sort($copy);
    $count = 0;
    for ($i = 0; $i < count($copy); $i++) {
        if ($heights[$i] != $copy[$i]) $count++;
    }
    return $count;
}

$result = heightChecker([1, 1, 4, 2, 1, 3, 1, 1]);
print_r($result . "\n");
$result = heightChecker([0, 4, 3, 5, 2, 9, 6]);
print_r($result . "\n");
$result = heightChecker([0, 0, 0, -2]);
print_r($result . "\n");
$result = heightChecker([1, 1, 1, 1, 1, 1, 1]);
print_r($result . "\n");