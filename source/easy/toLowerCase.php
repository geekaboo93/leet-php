<?php

function toLowerCase($str)
{
    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $char_code = ord($str[$i]);
        if ($char_code >= 65 && $char_code <= 90) {
            $result = $result . chr($char_code + 32);
        } else {
            $result = $result . $str[$i];
        }
    }

    return $result;
}

$result = toLowerCase("ABCDEFG HIJKLMN OPQRSTU VWSYZ");
print_r($result . "\n");
$result = toLowerCase("1223 ACBOngI");
print_r($result . "\n");
$result = toLowerCase("");
print_r($result . "\n");
