<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 18.11.2016
 * Time: 23:57
 */
$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $value) {
    $result  += pow($value, 2);
}
echo $result;