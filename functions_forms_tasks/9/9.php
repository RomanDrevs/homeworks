<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 25.11.2016
 * Time: 23:57
 */
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
include '9.html';
function myStrrev($string){
    $return = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $return .= $string[$i];
    }
    return $return;
}
print_r (myStrrev($_POST['text']));