<?php
/**
 * @param String $S
 * @return String
 */
function removeOuterParentheses($S) {
    $arr = str_split($S);
    $opened = 0;
    $result = "";
    foreach($arr as $c) {
        if ($c == '(' && $opened++ > 0) $result.=$c;
        if ($c == ')' && $opened-- > 1) $result.=$c;
    }
    return $result;
}
$result = removeOuterParentheses("(()())(())");
echo $result."\n";
$result = removeOuterParentheses("(()())(())(()(()))");
echo $result."\n";
$result = removeOuterParentheses("()()");
echo $result."\n";