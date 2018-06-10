<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 2:11
 */
$arr = array();
for($i = 0; $i < 10; $i++){
    $arr[] = rand(-20, 20);
}

echo "<pre>";
print_r($arr);

$min = $arr[0];
$max = $arr[0];
//Найдём наибольшее и наименьшее значение
foreach ($arr as $key => $value) {
    if ($value < $min) {
        $min = $value;
        $key_min = $key;
    }
    if ($value > $max) {
        $max = $value;
        $key_max = $key;
    }
}
//Меняем местами наибольшее и наименьшее значение
$arr[$key_min] = $max;
$arr[$key_max] = $min;
echo "<br> Min = $min | Max = $max </br>";
print_r($arr);