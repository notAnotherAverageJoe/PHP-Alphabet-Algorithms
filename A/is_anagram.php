<?php

function isAnagram($str1, $str2)
{
    #small short circuit
    if (strlen($str1) !== strlen($str2)) {
        return false;
    }
    $map1 = [];
    $map2 = [];

    for ($i = 0; $i < strlen($str1); $i++) {
        $map1[$str1[$i]] = ($map1[$str1[$i]] ?? 0) + 1;
    }

    for ($i = 0; $i < strlen($str2); $i++) {
        $map2[$str2[$i]] = ($map2[$str2[$i]] ?? 0) + 1;
    }

    foreach ($map1 as $key => $count) {
        if (!isset($map2[$key]) || $map1[$key] !== $map2[$key]) {
            return false;
        }
    }
    return true;
}
$s1 = "tar";
$s2 = "rat";

echo isAnagram($s1, $s2) ? 'True' : "False";
