<?php



function find_evens($arr)
{
    $results = [];
    foreach ($arr as $nums) {
        if ($nums % 2 == 0) {
            array_push($results, $nums);
        }
    }
    return $results;
}
$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(find_evens($a1));
