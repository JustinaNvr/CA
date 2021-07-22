<?php

$nmb = 3;
$str = 'a';
$tmp = null;

var_dump($nmb, $str, $tmp);

$str = 'Lorem ipsum dolor sit amet';

var_dump(substr($str, -3));

function negative($number)
{
    if ($number);
    return $number * -1;
}

var_dump(negative(3));

