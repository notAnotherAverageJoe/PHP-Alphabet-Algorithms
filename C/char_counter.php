

<?php

function charCounter($str)
{
    $counter = [];

    for ($i = 0; $i < strlen($str); $i++) {
        $counter[$str[$i]] = ($counter[$str[$i]] ?? 0) + 1;
    }

    print_r($counter);
}


$str1 = "hello world!";

charCounter($str1);
