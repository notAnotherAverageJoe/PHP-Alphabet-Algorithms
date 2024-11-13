<?php


function narc_nums($n)
{
    $digits = str_split($n);
    $digit_len = count($digits);

    $sum = 0;
    foreach ($digits as $digit) {
        $sum += pow($digit, $digit_len);
    }
    return $sum == $n;
}
$number = 152;

$number = 133;
if (narc_nums($number)) {
    echo "$number is a Narcissistic number\n";
} else {
    echo "$number is not a Narcissistic number\n";
}
