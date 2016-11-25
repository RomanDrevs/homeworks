<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 25.11.2016
 * Time: 23:26
 */
//<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

function getFileslist($path){
    if(!is_dir($path)){
        die("Непрвильный каталог");
    }
    $dir = opendir($path);
    echo "<ul>";
    while(false !==($fname = readdir($dir))){
        if(is_file(__DIR__."/".$fname)){
            echo "<li>{$fname}</li>";
        }
        else continue;
    }
    echo "</ul>";
    closedir($dir);
}

getFileslist("inc/scripts");