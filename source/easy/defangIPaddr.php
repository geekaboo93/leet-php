<?php

function defangIPaddr($address) {
    return str_replace(".","[.]",$address);
}

$result = defangIPaddr("1.1.1.1");
print_r($result."\n");
$result = defangIPaddr("255.100.50.0");
print_r($result."\n");