<?php

function judgeCircle($moves) {
    $splited_moves = str_split($moves);
    $directions = ["U" => 1, "D" => -1 , "L" => -1, "R" => 1];
    $curr_location = [0,0];

    foreach($splited_moves as $node => $move) {
        $val = isset($directions[$move]) ? $directions[$move] : 0;

        if($move == "U" || $move == "D") {
            $curr_location[0] = $curr_location[0] + $val;
        } else {
            $curr_location[1] = $curr_location[1] + $val;
        }
    }

    if($curr_location[0] == 0 && $curr_location[1] == 0) {
        return true;
    }
    return false;
}

$result = judgeCircle("UDLRLRUULLRLLLLLLL");
print_r($result."\n");