<?php

function diStringMatch($S) {
    $result = [];
    $count = strlen($S);
    if($count > 0) {
        $left = 0;
        $right = $count;

        $result = [$count+1];
        for ($i = 0; $i < $count; ++$i) {
            $result[$i] = $S[$i] == 'I' ? $left++ : $right--;
        }
        $result[$count] = $left;
    }
    return $result;
}

$result = diStringMatch("IDID");
echo "<pre>";
print_r($result);
echo "</pre>";
$result = diStringMatch("III");
echo "<pre>";
print_r($result);
echo "</pre>";
$result = diStringMatch("DDI");
echo "<pre>";
print_r($result);
echo "</pre>";