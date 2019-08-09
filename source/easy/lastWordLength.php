<?php
function lengthOfLastWord($s)
{
    if (!empty($s)) {
        $arr = explode(" ", $s);
        $count = count($arr);

        if ($count === 1) {
            if (!empty($arr[0])) {
                return strlen($arr[0]);
            }
        }
        for ($i = $count - 1; $i >= 0; $i--) {
            if (!is_null(($arr[$i])) && !empty($arr[$i])) {
                return strlen($arr[$i]);
            }
        }
    }
    return 0;
}

$input = "ni hao ma ? ";
$result = lengthOfLastWord($input);
echo $result . "\n";
$input = "Ha ha haha";
$result = lengthOfLastWord($input);
echo $result . "\n";
$input = "a ";
$result = lengthOfLastWord($input);
echo $result . "\n";
$input = " ";
$result = lengthOfLastWord($input);
echo $result . "\n";