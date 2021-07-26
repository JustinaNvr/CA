<?php
//Išvesti į ekraną 10 kartų žodį 'Labas';
//
for($i=1;$i<=10;$i++){
    print 'Labas ! ';
};
//Išvesti į ekraną skaičius nuo 1 iki 10;
//
echo '<br>';
for($i=1;$i<=10;$i++){
    print $i . ' ';
};
//Išvesti į ekraną skaičius nuo 10 iki 1;
//
echo '<br>';
for($i=10;$i>=1;--$i){
    print $i . ' ';
};
//Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
//
echo '<br>';
for($i=1;$i<=100;$i++){
    if ($i % 2 == 0) {
        print $i . ' ';
    }
};
//Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
//
echo '<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14, 16];
print_r($arr);
//Išvesti į ekraną visų masyvo elementų sumą.;
//
echo '<br>';
print_r(array_sum($arr));
//Išvesti į ekraną visų masyvo elementų sandaugą.;
//
echo '<br>';
print_r(array_product($arr));
//Išvesti į ekraną kas antrą masyvo elementą;
//
echo '<br>';
array_walk($arr,function($v,$k) use(&$result,&$current){
    if($current%2 == 0) {
        $result['even'][$k] = $v;
    }else{
        $result['odd'][$k] = $v;
    }
    $current++;
});
print_r($result);
//Funkciją, kuri apverstų masyvo elementus;
//
echo '<br>';
print_r(array_reverse($arr));
//Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)
//
echo '<br>';
//function fibonacci($arr){
//    $fib = $arr;
//    for ( $i=2; $i<=$arr; ++$i ) {
//        $fib[$i] = $fib[$i-1] + $fib[$i-2];
//    }
//    return $fib;
//};
//var_dump(fibonacci($arr));

//Išvesti visų masyvo elementų vidurkį;(foreach)
//
echo '<br>';
function average($arr)
{
    return array_sum($arr) / count($arr);
}
var_dump(average($arr));
//Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);
echo '<br>';
 $cars = [
 	0 => 'BMW',
 	1 => 'Ford',
 	2 => 'MB',
 ];

 var_dump($cars);

 $cars = [
 	'BMW' => [
 		'M3',
 		'X5'
 	],

 	'Ford' => [
 		'Mustang',
 		'Focus'
 	],

 	'MB' => [
 		'GL',
 		'ML',
 		'CLS',
 	],
 ];
echo '<br>';
var_dump($cars);

