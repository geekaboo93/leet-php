<?php

function repeatedNTimes($A)
{
    $count = count($A);
    if ($count === 0)
        return 'None';

    for ($i = 0; $i < $count; $i++) {
        if (($A[$i] == $A[($i + $count + 1) % $count]) || ($A[$i] == $A[($i + $count + 2) % $count])) {
            return $A[$i];
        }
    }
    return 0;

}

$result = repeatedNTimes([7, 8, 7, 0]);
print_r($result . "\n");
$result = repeatedNTimes([]);
print_r($result . "\n");
$result = repeatedNTimes([1, 2, 3, 3]);
print_r($result . "\n");
$result = repeatedNTimes([2, 1, 2, 5, 3, 2]);
print_r($result . "\n");
$result = repeatedNTimes([5, 1, 5, 2, 5, 3, 5, 4]);
print_r($result . "\n");
$result = repeatedNTimes([5, 1, 5, 2, 5, 3, 5, 4, 4, 4, 4, 4]);
print_r($result . "\n");