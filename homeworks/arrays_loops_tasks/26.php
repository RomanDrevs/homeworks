<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 2:11
 */
$arr = array();
//Заполняем массив случайными числами от -50 до 100
//Сделал rand(-50, 100) не за условием задачи а для того чтобы были числа меньше и больше нуля
for($i = 0; $i < 20; $i++){
    $arr[] = rand(-50, 100);
}
echo "<pre>";
print_r($arr);
echo "Елементы массива больше 0 с парными индексами: <br/>";
$product = 1;
foreach ($arr as $key => $value) {
    if(($key % 2 == 0) && $value > 0){
        echo "$value | ";
        $product *= $value;
    }
}
echo "<br/> Результат Умножения = $product <br/>";
echo "Елементы массива больше 0 с непарными индексами: <br/>";
foreach ($arr as $key => $value) {
    if(($key % 2 != 0) && $value > 0){
        echo "$value | ";
        $product *= $value;
    }
}