<?php
//Parašykite funkciją, kuri priimtų 1 argumentą - masyvą skaičių ir grąžintu pirmo ir paskutinio elementų sumos šąknį.
//
function powfirstlast($arr)
{
    $first = (float) array_shift($arr);
    $last  = (float) array_pop($arr);

    $sum = $first + $last;
    $_sqr = sqrt($sum);

    return $_sqr;
}

$arr = [1, 2, 3, 4];
unset($arr[0]);

var_dump(powfirstlast($arr));

//Parašykite funckciją, kuri priimtų 1 argumentą - masyvą iš 5 skaičių ir grąžintu visų masyvo elementų aritmetinį vidurkį.
//
function average($arr)
{
    return array_sum($arr) / count($arr);
}

$arr = [10, 10, 10, 4, 10, 1];
var_dump(average($arr));

//Parašykite funkciją, kurį priimtų 1 argumentą - string`ų masyvą bei parinktų antrą bei priešpaskutinį elementą.
//

function secondandbeforelast(array $arr)
{
    $second = array_slice($arr, 1, 1);
    $before = array_slice($arr, -2, 1);

    return array_merge($second, $before);
}

$arr = ["a", "b", "c", "d",];
var_dump(secondandbeforelast($arr));

// Parašykite funkciją, kuri priimtų 1 argumentą - masyvą ir jame sukeistu vietomis pirmą ir paskutinį masyvo elementus.
//
function change($arr)
{
    $first = array_shift($arr);
    $last = array_pop($arr);

    array_unshift($arr, $last);
    $arr[] = $first;
    return $arr;
}

$arr = [1, 2, 3, 4];
var_dump(implode(' ', change($arr)));

//Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.
//
function mix($arr)
{
    $middle = array_splice($arr);

    $res = random($middle);

    return $res;

}

$arr = [1, 2, 3, 4];
$middle = array_splice($arr);
var_dump($middle);


var_dump(mix($arr));
