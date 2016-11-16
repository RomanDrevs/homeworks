<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 16.11.2016
 * Time: 22:01
 */
$a = 9;
$b = 5.2;
$result = "";
$operator = "/";
if(($operator=="/" || $operator=="%") && $b == 0){
    die ("на 0 делить нельзя");
}
switch ($operator) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo number_format($a / $b, 2);
        break;
    case '%':
        echo $a % $b;
        break;

    default:
        echo "Неправильный оператор";
}