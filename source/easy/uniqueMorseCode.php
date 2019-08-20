<?php

function uniqueMorseRepresentations($words) {
    $morse_codes = [".-","-...","-.-.","-..",".","..-.","--.","....",
        "..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.",
        "...","-","..-","...-",".--","-..-","-.--","--.."];

    $alpha = ["a","b","c","d","e","f","g","h","i","j","k",
        "l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];


    if(count($words) <= 100){
        $result = [];
        foreach($words as $word) {
            $refs = array_combine($alpha,$morse_codes);
            $splited = str_split($word);

            $converted = "";
            foreach($splited as $char) {
                $temp = isset($refs[$char]) ? $refs[$char] : "";
                $converted .= $temp;
            }
            if(!empty($converted)) {
                if(!in_array($converted,$result)) {
                    $result[] = $converted;
                }
            } else {
                if (!in_array(" ", $result)) {
                    $result[] = " ";
                }
            }

        }
    }
    if(!empty($result)) {
        return count($result);
    }
    return 0;
}

$words = ["gin", "zen", "gig", "msg",""];
$result = uniqueMorseRepresentations($words);
print_r($result."\n");
$words = ["","",""];
$result = uniqueMorseRepresentations($words);
print_r($result."\n");
$words = [];
$result = uniqueMorseRepresentations($words);
print_r($result."\n");