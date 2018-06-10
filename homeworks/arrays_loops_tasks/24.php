<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 2:10
 */
$number = 442158755745 ;
$my_num = 5;
if(!is_numeric($number))
    exit("Вы ввели не число! - $number");
else {
    $string = (string)$number;
    $count = 0;
    for($i = 0; $i < strlen($string); $i++){
        if ($string[$i] == $my_num)
            $count++;
    }
    if(!$count) {
        echo "Число $my_num ни один раз не входит в число $number";
    }
    else{
        echo "Число $my_num входит $count раза в число $number";
    }
}