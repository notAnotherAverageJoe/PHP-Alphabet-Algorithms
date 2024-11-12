<?php
# given an array of integets return the index of the target

function findTarget($arr, $target)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $target) {
            return $i;
        }
    }
    return -1;
}


$array1 = [241, 2, 33, 504, 115, 6, 77, 25, 846];

$target = 77;
print_r(findTarget($array1, $target));


// $array1 = [241, 2, 33, 504, 115, 6, 77, 25, 846];

// $target = 77;
// result index = 6