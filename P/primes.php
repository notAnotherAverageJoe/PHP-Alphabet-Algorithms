<?php

function check_prime($N)
{
    if ($N <= 1) {
        echo "false";
        return false;
    }
    for ($i = 2; $i <= sqrt($N); $i++) {
        if ($N % $i === 0) {
            echo "false";
            return false;
        }
    }
    echo "true";
    return true;
}
check_prime(25);
check_prime(29);

function prime_list($N)
{
    $primesList = [];

    for ($i = 2; $i <= $N; $i++) {
        $is_prime = true;
        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j === 0) {
                $is_prime = false;
                break;
            }
        }
        if ($is_prime) {
            array_push($primesList, $i);
        }
    }
    return $primesList;
}
print_r(prime_list(93));
