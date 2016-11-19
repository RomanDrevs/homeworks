<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 2:08
 */
$number = 12345;
if(!is_numeric($number)){
    exit("Ви ввели не число! - $number");
}
else {
    $string = (string)$number;
    $result = 0;
    for($i = 0; $i < strlen($string); $i++){
        $result += $string[$i];
    }
}
echo $result;