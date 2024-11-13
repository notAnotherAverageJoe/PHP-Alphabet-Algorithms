<?php

function group_odds($arr)
{
    $result = [];

    foreach ($arr as $nums) {
        if ($nums % 2 !== 0) {
            array_push($nums);
        }
    }
    return $result;
}


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r(group_odds($result));
