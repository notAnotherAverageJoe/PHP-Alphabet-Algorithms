<?php

function rev_str($str)
{
    return strrev($str);
}
echo (rev_str("hello\n"));


function rev_no_method($str)
{
    $result = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    return  $result;
}
$s1 = "hello world\n";
echo rev_no_method($s1);
