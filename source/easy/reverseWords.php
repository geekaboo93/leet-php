<?php
/**
 * Created by PhpStorm.
 * User: khloe
 * Date: 08/02/2020
 * Time: 1:47 AM
 */
/**
 * @param String $s
 * @return String
 */
function reverseWords($s) {
    if(strlen($s) < 1)
        return "";

    $s = trim($s);
    $chunk = explode(" ",$s);
    $result = "";

    foreach($chunk as $key => $str) {
        for($i = strlen($str) - 1; $i > -1; $i--) {
            $result.= $str[$i];
        }
        if($key < count($chunk) -1) {
            $result.=" ";
        }
    }
    return $result;
}
$result = reverseWords("Let's take LeetCode contest");
print($result."\n");