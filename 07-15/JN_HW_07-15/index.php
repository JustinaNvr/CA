<?php
//Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.
//
$nmb = 3;
$str = 'a';
$tmp = null;

var_dump($nmb, $str, $tmp);

//Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.
//
$str = 'Lorem ipsum dolor sit amet';

var_dump(substr($str, -3));

//Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3)
//
function negative($number)
{
    if (is_numeric($number) == FALSE){
        return NULL;
    }
    return $number * -1;
}

var_dump(negative(3));

//Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();
//
function dice()
{
    return rand(1, 6);
}
var_dump(dice());
var_dump(dice());
var_dump(dice());
var_dump(dice());

//Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.
//
function halfarea($a, $b)
{
    return ($a * $b)/2;
}

var_dump(halfarea(10, 12));
var_dump(halfarea(5, 7));

//Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100.
// (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!")
function isyoungenough($age)
{
    return 100 - $age;
}

function isyoungenoughmessage($age)
{
    $diff = isyoungenough($age);

    if ($diff >0){
        sprintf('Iki šimto jums trūksta %d metų! Dar gyventi liko daug!', $diff);
    } else if ($diff <0){
        sprintf('Jums virš šimto metų! Plius -%d!', $diff * -1);
    } else {
        return 'Jums šimtas metų.';
    }
}

var_dump(isyoungenoughmessage(24));
var_dump(isyoungenoughmessage(70));
var_dump(isyoungenoughmessage(100) . 'Sveikiname');
//
//Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų.

function f2c($fah)
{
    return ($fah - 32) / 1.8;
}

var_dump(f2c(32));
var_dump(f2c(70));
var_dump(f2c(101));
