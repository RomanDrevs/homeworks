<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 1:22
 */
$n = 1000;
$num = 0;
while ($n > 50) {
    $num++;
    $n /= 2;
}
echo $num;