<?php
function selectionSort($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $indexMin = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$j]<$array[$indexMin]){
                $indexMin = $j;
            }
        }
        $t = $array[$i];
        $array[$i] = $array[$indexMin];
        $array[$indexMin] = $t;
    }
    return $array;
}

$myArr = [1, 4, 3, 2, -5];
print_r(selectionSort($myArr));