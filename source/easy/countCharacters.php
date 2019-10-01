<?php
function countCharacters($words, $chars) {
    $result = 0;
    if(count($words) < 1 || strlen($chars) > 100) {
        return $result;
    }

    foreach($words as $word) {
        $strlen = strlen($word);
        if($strlen > 1000) {
            continue;
        }

        $match = true;
        for($i=0 ;$i < $strlen; $i++) {
            $word_freq = substr_count($word,$word[$i]);
            $char_freq = substr_count($chars,$word[$i]);
           if(strpos($chars,$word[$i]) === false || $char_freq < $word_freq) {
               $match = false;
           }
        }
        if($match) {
            $result+= strlen($word);
        }
    }
    return $result;
}

$result = countCharacters(["helllo","world","leetcode"],'welldonehoneyr');
var_dump($result);
$result = countCharacters(["cat","bt","hat","tree"],'atach');
var_dump($result);