<?php

function findWords($words)
{
    $keyboard = ["qwertyuiop", "asdfghjkl", "zxcvbnm"];
    $result = [];

    if (count($words) == 0) {
        return [];
    }

    foreach ($words as $node => $word) {
        $char_count = strlen($word);
        foreach ($keyboard as $row) {
            $match = true;
            for ($i = 0; $i < $char_count; $i++) {
                if (strpos($row, strtolower($word[$i])) === false) {
                    $match = false;
                }
            }
            if($match) {
                array_push($result,$word);
                break;
            }
        }
    }

    return $result;
}

$result = findWords(["asdfghjkl","qwertyuiop", "zxcvbnm"]);
print_r($result);
echo "</pre>";
$result = findWords(["Hello", "Alaska", "Dad", "Peace"]);
echo "<pre>";
print_r($result);
echo "</pre>";