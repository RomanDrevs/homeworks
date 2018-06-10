<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 0:38
 */
$arr= array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$string = "";
foreach ($arr as $value) {
    $string .= $value;
}
echo $string;