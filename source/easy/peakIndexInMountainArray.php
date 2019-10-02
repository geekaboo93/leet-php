<?php
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
