<?php

function decompressRLElist($nums)
{

    $length = 0;
    for ($i = 0; $i < count($nums); $i = $i + 2) {
        $length += $nums[$i];
    }

    $result = array();
    if($length > 0) {
        $key = 0;
        $counter = 0;
        for ($i = 0; $i < count($nums); $i = $i + 2) {
            while ($counter < $nums[$i]) {
                $result[$key] = $nums[$i + 1];
                $key++;
                $counter++;
            }
            $counter = 0;
        }
    }

    return $result;
}

$value = [1, 2, 3, 4];
$result = decompressRLElist($value);
print_r($result);

$value = [5,6,7];
$result = decompressRLElist($value);
print_r($result);