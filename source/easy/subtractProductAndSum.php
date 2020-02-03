<?php


/**
 * @param Integer $n
 * @return Integer
 */
function subtractProductAndSum($n)
{
    $n = (string)$n;
    $product = $n[0];
    $sum = 0;
    for ($i = 0; $i < strlen($n); $i++) {
        if ($i > 0)
            $product *= (int)$n[$i];
        $sum += (int)$n[$i];
    }

    return $product - $sum;
}

$result = subtractProductAndSum(234);
print($result . "\n");
$result = subtractProductAndSum(4421);
print($result . "\n");
$result = subtractProductAndSum(0);
print($result . "\n");