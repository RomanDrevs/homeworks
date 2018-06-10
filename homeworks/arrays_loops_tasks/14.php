<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 1:35
 */
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = [2,3,4];
foreach($arr as $numb){
    if(in_array($numb, $e))
        exit("Есть!");
}
echo "Нет!";