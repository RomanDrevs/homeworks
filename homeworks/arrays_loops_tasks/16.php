<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 1:38
 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $value) {
    if($value % 3 == 0 ){
        echo "$value <br/>";
    }
    else{
        echo "$value, ";
    }
}