<?php

function oddCells($n, $m, $indices)
{
    $count = 0;
    $row = array_fill(0, $n, 0);
    $col = array_fill(0, $m, 0);

    foreach ($indices as $index) {
        $row[$index[0]]++;
        $col[$index[1]]++;
    }
    for ($i = 0; $i < $n; $i++)
        for ($j = 0; $j < $m; $j++) {
            if (($row[$i] + $col[$j]) % 2 != 0)
                $count++;
        }
    return $count;
}

print_r(oddCells(2, 3, [[0, 1], [1, 1]])."\n");
print_r(oddCells(2, 2, [[1, 1], [0, 0]])."\n");