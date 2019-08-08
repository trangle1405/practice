<?php

function findNumberByBinarySearch($arrayNumber, $findNumber)
{
    $left = 0;
    $right = count($arrayNumber) - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($x === $arrayNumber[$mid]) {
            return $mid;
        } else if ($x < $arrayNumber[$mid]) {
            $right = $mid - 1;
        } else if ($x > $arrayNumber[$mid]) {
            $left = $mid + 1;
        }
    }
    return -1;
}

function findNumberByBinarySearchdequy($array, $left, $right, $x)
{
    $mid = floor(($left + $right) / 2);

    if ($left > $right) {
        return -1;
    }

    if ($x === $array[$mid]) {
        return $mid;
    }
    if ($x > $array[$mid]) {
        return findNumberByBinarySearchdequy($array, $mid + 1, $right, $x);
    }
    if ($x < $array[$mid]) {
        return findNumberByBinarySearchdequy($array, $left, $right - 1, $x);
    }
}

function findNumberBySequentialSearch($array, $x){
    for ($i = 0; $i<count($array); $i++){
        if ($array[$i] === $x){
            return $i;
        }

    }
    return -1;
}


$array1 = [1, 6, 2, 82, 89, 4, 9, 4];
//sort($array1);
$left = 0;
$right = count($array1) - 1;
$x = 2;
//echo(findNumberByBinarySearchdequy($array1, $left, $right, $x));
echo (findNumberBySequentialSearch($array1,2 ));
