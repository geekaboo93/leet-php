<?php
function judgeCircle($moves)
{
    $x = 0;
    $y = 0;

    for ($i = 0; $i < strlen($moves); $i++) {
        $move = $moves[$i];
        if ($move == "U") {
            $y += 1;
        } else if ($move == "D") {
            $y += -1;
        } else if ($move == "L") {
            $x += -1;
        } else if ($move == "R") {
            $x += 1;
        }
    }

    if ($x == 0 && $y == 0) {
        return true;
    }
    return false;
}

$result = judgeCircle("UDLRLRUULLRLLLLLLL");
print_r($result . "\n");
$result = judgeCircle("");
print_r($result . "\n");
$result = judgeCircle("RLUURDDDLU");
print_r($result . "\n");
