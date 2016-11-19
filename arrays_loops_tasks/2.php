<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 18.11.2016
 * Time: 23:51
 */
$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $value) {
    $result  += $value;
}
echo $result;