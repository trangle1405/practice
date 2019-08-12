<?php

function insertion_Sort($array)
{
    $count = count($array);
    for ($i = 1; $i < $count; $i++) {
        $val = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $val) {
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $val;
    }
    return $array;
}
$myArr = [1, 4, 3, 2, -5];
print_r(insertion_Sort($myArr));

