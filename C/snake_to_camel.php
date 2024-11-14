<?php

function snake_to_camel($str)
{
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === "_") {

            $result .= strtoupper($str[$i + 1]);
            $i += 1;
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
}

$string = "hello_world";
echo snake_to_camel($string);
