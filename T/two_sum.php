<?php

# given an array such as  [2,7,11,15] find the two numbers  added together that equal the given target
# return the index of the two numbers

function twoSum($arr, $target)
{
    $map = [];
    for ($i = 0; $i < count($arr); $i++) {
        $neededValue = $target - $arr[$i];

        if (isset($map[$neededValue])) {
            return [$map[$neededValue], $i];
        }
        $map[$arr[$i]] = $i;
    }
    return null;
}


$target = 9;
$array1 = [2, 7, 11, 15];
print_r(twoSum($array1, $target));
// Array
// (
//     [0] => 0   2 + 7 = 9
//     [1] => 1
// )