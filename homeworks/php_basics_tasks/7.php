<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 16.11.2016
 * Time: 1:20
 */
include "2.php";
if ($age >=18 and $age <=60) {
    echo "Вам ещё работать и работать";
}elseif ($age >= 60){
    echo "Вам пора на пенсию";
}elseif ($age >=1 and $age < 18){
    echo "Вам еще рано работать";
}