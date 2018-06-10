<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 0:11
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $key => $value){
    echo "$key <br/>";
}
echo "Keys <br/>";
foreach($arr as $value){
    echo "$value <br/>";
}
echo "Values <br/>";