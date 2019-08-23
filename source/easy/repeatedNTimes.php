<?php

function repeatedNTimes($A)
{
    for ($i = 2; $i < count($A); $i++) {
        if ($A[$i] == $A[$i - 1] || $A[$i] == $A[$i - 2]) {
            return $A[$i];
        }
    }

    return $A[0];
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