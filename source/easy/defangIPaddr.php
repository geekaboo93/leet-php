<?php

function defangIPaddr($address) {
    $result = "";
    for($i = 0; $i < strlen($address); $i++ )  {
        $result .= $address[$i] == '.' ? '[.]' : $address[$i];
    }
    return $result;
}

$result = defangIPaddr("1.1.1.1");
print_r($result."\n");
$result = defangIPaddr("255.100.50.0");
print_r($result."\n");