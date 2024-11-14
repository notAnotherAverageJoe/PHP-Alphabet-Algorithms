<?php

function camelToSnake($str)
{

    $snake = preg_replace('/[A-Z]/', '_$0', $str);
    $snake = strtolower($snake);
    return ltrim($snake, '_');
}
$str = "camelCaseString";
echo camelToSnake($str);
