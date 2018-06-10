<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 0:34
 */
$arr = [2, 5, 9, 15, 0, 4];
foreach($arr as $value){
    if($value > 3 && $value < 10)
        echo "$value <br/>";
}