<?php

//Khai bao mang

$students_classA = ["Trang", "Anh", "Hai"];
$students_classB = array("Hoa", "Dung", "Hanh");
$ageOfStudent = ["Trang" => 23, "Hong" => 18, "Huy" => 22];
$classA = [
    ["Trang", 23, "Female"],
    ["Hai", 20, "Male"],
    ["Anh", 22, "Female"]
];

//duyet mang
$ageOfStudent = ["Trang" => 23, "Hong" => 18, "Huy" => 22];
foreach ($ageOfStudent as $name=>$age){
    echo $name." is ".$age;
}


function showNameInArray($arrayName)
{
    foreach ($arrayName as $name) {
        echo $name . ", ";
    }
}

function showInfomationOfStudent($students)
{
    foreach ($students as $key => $student) {
        echo "<ul>"."Student"." ".$key.":";
        foreach ($student as $info) {
            echo "<li>".$info."</li>";
        }
        echo "</ul>";
    }
}



//thuc hanh cac ham

//echo is_array($classA);
//
//
//if (in_array("Trang", $students_classA))
//{
//    echo "co Trang";
//}
//else
//{
//    echo "khong co Trang";
//}
//
//
//$classMerge = array_merge($students_classA, $students_classB);
//print_r($classMerge);
//
//$keys = array_keys ( $ageOfStudent );
//print_r ( $keys );

//array_shift($students_classA);
//print_r($students_classA);

//array_unshift($students_classA, "Trang");
//print_r(array_unique($students_classA));


//echo array_search(23, $ageOfStudent);

//array_pop($students_classA);
//print_r($students_classA);


//print_r(array_values($ageOfStudent));


//function increaseAge($age){
//    return $age + 5;
//}
//print_r(array_map("increaseAge", $ageOfStudent));

//echo array_sum($ageOfStudent);

//echo count($students_classA);

//sort($students_classA);
//print_r($students_classA);


//print_r(array_slice($students_classA, 1, 2, false));

//print_r(array_splice($students_classA, 0, 1, $students_classB));
//print_r($students_classA);

//print_r( sizeof($students_classA));

//$keys = array_flip($ageOfStudent);
//print_r($keys);


print_r(array_change_key_case($ageOfStudent, CASE_UPPER));


$students_classA = ["Trang", "Anh", "Hai", "Hoa", "Dung", "Hanh"];


// Tim kiem nhi phan


function findNumberByBinarySearchRecursion($arrayNumber, $left, $right, $x)
{
    $mid_Index = floor(($left + $right) / 2);

    if ($left > $right) {
        return -1;
    }

    if ($x === $arrayNumber[$mid_Index]) {
        return $mid_Index;
    }
    if ($x > $arrayNumber[$mid_Index]) {
        return findNumberByBinarySearchRecursion($arrayNumber, $mid_Index + 1, $right, $x);
    }
    if ($x < $arrayNumber[$mid_Index]) {
        return findNumberByBinarySearchRecursion($arrayNumber, $left, $right - 1, $x);
    }
}

//tim kiem tuyen tinh

function findNameInClass($array, $name){
    for ($index = 0; $index<count($array); $index++){
        if ($array[$index] === $name){
            return $index;
        }

    }
    return -1;
}

$students_classA = ["Trang", "Anh", "Hai", "Hoa", "Dung", "Hanh"];
echo (findNameInClass($students_classA, "Anh"));





