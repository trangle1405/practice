<?php
$myArr = [1, 4, 3, 2, 5];

$count = count($myArr);

$t = 0;

//function swap($number1, $number2)
//{
//    $t = $number1;
//    $number1 = $number2;
//    $number2 = $t;
//}

function bubble($array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$j] < $array[$i]) {
                $t = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $t;
            }
        }
    }
    return $array;
}

print_r(bubble($myArr));
