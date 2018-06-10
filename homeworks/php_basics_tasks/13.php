<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 16.11.2016
 * Time: 21:03
 */
$s = 120; //km
$t = 2; //hours
$v = number_format($s / $t, 2);
echo "Speed = $v km/h or ".(number_format($v * 1000 / 3600, 2))." m/s";