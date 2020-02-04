<?php

function peakIndexInMountainArray($A)
{
    for ($i = 1; $i + 1 < count($A); ++$i)
        if ($A[$i] > $A[$i + 1]) {
            return $i;
        }
    return 0;
}
$result = peakIndexInMountainArray([]);
echo $result."\n";
$result = peakIndexInMountainArray([0,0,0]);
echo $result."\n";
$result = peakIndexInMountainArray([0,1,0]);
echo $result."\n";
$result = peakIndexInMountainArray([0,2,1,0]);
echo $result."\n";
=======
/**
 * @param Integer[] $A
 * @return Integer
 */
function peakIndexInMountainArray($A)
{
    for ($i = 1; $i + 1 < count($A); ++$i) if ($A[$i] > $A[$i + 1]) {
        return $i;
    }
    return 0;
}
