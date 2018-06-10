<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 24.11.2016
 * Time: 23:37
 */
//Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и
// в первом и во втором поле ввода.
//Реализацию этой логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.

include '1.html';
function getCommonWords($a, $b)
{
    //Разбиваем строку в массив по-словно
    $arr_a = preg_split("/[\s,.:;]+/", $a);
    $arr_b = preg_split("/[\s,.:;]+/", $b);
    $result = array_unique(array_intersect($arr_a, $arr_b));
    //удаляем пустые елементы
    return array_filter($result, function ($item) {
        return !empty($item);
    });
}

print_r(getCommonWords($_POST['a'], $_POST['b']));