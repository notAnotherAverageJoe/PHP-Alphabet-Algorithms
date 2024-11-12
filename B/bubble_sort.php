<?php


function bubble_sort($arr)
{

    $swapped = true;

    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > ($arr[$i + 1])) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
    }
    return $arr;
}


$arr1 = [5, 2, 8, 1, 4, 3, 10, 7, 6, 9];
print_r(bubble_sort($arr1));
