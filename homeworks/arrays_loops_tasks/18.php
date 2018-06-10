<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 1:49
 */
$days_of_week = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
echo "<ul>";
foreach ($days_of_week as $value) {
    echo "<li ";
    echo ($value == "Saturday" || $value == "Sunday") ? "style = 'font-weight: bold'" : '';
    echo "> $value</li>";
}
echo "</ul>";