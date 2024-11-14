<?php

function breakCamel($str)
{

    $camelBreak = preg_replace('/[A-Z]/', ' $0', $str);

    return ltrim($camelBreak, ' ');
}

$sentence = "ForTheHorde";

echo breakCamel($sentence . "\n");
