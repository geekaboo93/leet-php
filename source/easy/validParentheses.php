<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $parentheses = array('(' => ')', '[' => ']', '{' => '}');
        $stack = array();
            
        for($i = 0; $i < strlen($s); $i++) {
            if (isset($parentheses[$s[$i]])) {
                array_push($stack, $s[$i]);
            } else {
                $parenthesis = array_pop($stack);        
                if ($s[$i] != $parentheses[$parenthesis]) {
                    return false;
                }
            }
        }
        
        return empty($stack);
    }
}
$solution = new Solution();
var_dump($solution->isValid('()'));
?>>