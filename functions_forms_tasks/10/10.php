<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 26.11.2016
 * Time: 0:29
 */
//Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы
function unique($string){
        $b=explode(' ',mb_strtolower($string));
        echo 'Всего слов - '.count($b);
     $b=array_unique($b);
     echo '; Уникальных слов - '.count($b);
 }
 include '10.html';
 unique($_POST['text']);