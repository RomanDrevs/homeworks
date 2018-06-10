<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 1:54
 */
$day = "Thursday";
$days_of_week = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
echo "<ul>";
foreach ($days_of_week as $value) {
    echo "<li ";
    echo $value == $day ? "style = 'font-style: italic'" : '';
    echo "> $value</li>";
}
echo "</ul>";