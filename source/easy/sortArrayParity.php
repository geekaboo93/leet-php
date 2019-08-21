<?php

function sortArrayByParity($A)
{
    $count_a = count($A);
    if ($count_a === 0) {
        return [];
    }

    $odd = [];
    $even = [];

    foreach ($A as $value) {
        if ($value % 2 > 0) {
            $odd[] = $value;
        } else {
            $even[] = $value;
        }
    }

    return array_merge($even, $odd);
}

$result = sortArrayByParity([]);
echo "<pre>";
print_r($result);
echo "</pre>";
$result = sortArrayByParity([999, 1, 2, 4]);
echo "<pre>";
print_r($result);
echo "</pre>";
$result = sortArrayByParity([91, 327, 767, 951]);
echo "<pre>";
print_r($result);
echo "</pre>";
