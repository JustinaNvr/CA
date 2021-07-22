<?php
// From 07-19 Classwork
//Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.
//
function mix($arra) {
    if (!is_array($arra)) return $arra;

    $new = array_slice($arra, 1, -1);
    $keys = array_keys($new);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key)
        $random[$key] = $new[$key];
    return $random;
}

$arra = [1, 2, 3, 4, 5, 6, 7, 8];
$first = array_shift($arra);
$last = array_pop($arra);
var_dump('From 07-19 Classwork');
var_dump($first, mix($arra), $last);

//Masyvai
var_dump('MASYVAI');
//Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.
$arr = [4, 5, -2, -1, 0, 1, 2, 3];

//Padauginti esamo masyvo narius iš 2
//
function multitwo($arr){

    foreach ($arr as &$value) {
    $result[] = $value * 2;
    }
    return $result;
}
var_dump(multitwo($arr));

//Pakelti masyvo narius kvadratu
//
function square($arr){
    $total = 0;
    foreach($arr as $key=>$value){
        $total += $value ** 2;
        $result[] = $total;
    }
    return $result;
};
var_dump(square($arr));

//Padauginti masyvo narius iš jų index'o
//
function multiindex($arr){

    foreach ($arr as $key=>$value) {
        $value = $value * $key;
        $result[] = $value;
    }
    return $result;
};
var_dump(multiindex($arr));

//Atrinkti tiktai teigimų elementų masyvą
//
function positive($arr){
    foreach ($arr as &$value) {
        if($value >= 0)
            $result[] = $value;
    }
    return $result;
};
var_dump(positive($arr));

//Atrinkti tiktai neigiamų elementų masyvą
//
function negative($arr){
    foreach ($arr as &$value) {
        if($value < 0)
            $result[] = $value;
    }
    return $result;
};
var_dump(negative($arr));

//Atrinkti tiktai lyginių skaičių masyvą
//
function even($arr)
{
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            $even[] = $value;
        }
    }
    return $even;
}
var_dump(even($arr));

//Atrinkti tiktai nelyginių skaičių masyvą
/////////////////////////////////////////////nerodo neigiamų nelyginių skaičių
function odd($arr){
    foreach ($arr as $key => $value) {
        if ($key % 2 == 1) {
            $odd[] = $key;
        }
    }
    return $odd;
};
var_dump(odd($arr));

//Asociatyvūs masyvai
//Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre
$books = ['title', 'author', 'year', 'genre'];

//Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas
$books = [
    'title' => [
        '1Q84', 'Frankenstein', 'Dracula',
    ],
    'author' => [
        'Haruki Murakami', 'Mary Wollstonecraft Shelley', 'Bram Stoker'
    ],
    'year' => [
        '2013', '1818', '1897'
    ],
    'genre' => [
        'novel', 'horror novel', 'horror fantasy novel'
    ]
];
//Išvesti visus knygų masyvo elementus su var_dump;
//
var_dump($books);
//Išvesti visus knygų masyvo elementus HTML lentele;
//
function array2Html($books, $table = true)
{
    $out = '';
    foreach ($books as $key => $value) {
        if (is_array($value)) {
            if (!isset($tableHeader)) {
                $tableHeader =
                    '<th>' .
                    implode('</th><th>', array_keys($value)) .
                    '</th>';
            }
            array_keys($value);
            $out .= '<tr>';
            $out .= array2Html($value, false);
            $out .= '</tr>';
        } else {
            $out .= "<td>$value</td>";
        }
    }

    if ($table) {
        return '<table>' . $tableHeader . $out . '</table>';
    } else {
        return $out;
    }
}
var_dump(array2Html($books));

//Išvesti visų visų knygų metų vidurkį;
//
function average($books)
{
    return array_sum($books['year']) / count($books['year']);
}
var_dump(average($books));

//Funkcijos
var_dump('FUNKCIJOS');
//Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.
//
function maximum($arr)
{
    return max($arr);
}

var_dump(maximum($arr));

//Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.
//
function minimum($arr)
{
    return min($arr);
}

var_dump(minimum($arr));

//Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.
//
function mintomax($arr)
{
    sort($arr);
    foreach ($arr as $key => $value) {
        $mintomax[] = $value;
    }
    return $mintomax;
}

var_dump(mintomax($arr));