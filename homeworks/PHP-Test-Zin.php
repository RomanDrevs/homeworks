<?php
/**
 * Created by PhpStorm.
 */
//Example
echo 'Hello';
echo 5+5;
echo 'a';
echo 'b';
echo 'c';
echo 2+2+2+2+2+2+2+2;
print (12+33);
echo 'd';
echo 'e';
// correct variables.
$a;
$street;
$user;
$_item;
// incorect variables.
$_12345;
$USER;
// recomendations for variables.
$name;
$address;
/**
 * Recomendations for variables. Lower-Camel-Case
 */
$username;
$userName;
// Operators
$a = 5;
$a = $a + 10;
print ($a);
unset ($a);
$a=5;
$b=&$a;
$a=10;
echo $a, $b;
// Constants
// example 1
define ('NAME', 'Victor');
echo NAME;
// example 2
const Name = 'Roman';
echo Name;
// Тип данных String
$a = 10;
echo "Example of string $a";
// Тип данных String - экранирование
echo 'Guest says: "Hi all!"';
echo "Guest says:\"Hi everyone\"";
// Screening of variables in string
$c = 80;
$d = 90;
echo "В ($c)х и ($d)х годах";
// Тип данных String.Оператор склеивания
$firstName = 'Roman';
$lastName = 'Drevs';
$fullName = $firstName.' '.$lastName;
echo $fullName;
// Функция gettype() и тип данных - null
$a = null;
echo gettype($a);
unset ($a);
// array() - Тип данных-массив
$arr = array(2 => 'Andrew', 3 => 'Borys', 4 => 'Roman');
print($arr[4]);
// Ассоциативный массив
$arr = array('name' => 'Michael', 'age' => '20');
print($arr['name']);
$arr2 = array ('F' => 'Very very bad', 'E' => 'Very bad', 'D' => 'Bad','C' => 'Normal',
    'B' => 'Good', 'A' => 'Very Good', 'A+' => 'Fine' );
echo '<pre>';
// Для вывода массивов array - use print_r(); or var_dump();
var_dump($arr2);
echo '</pre>';
// Work with array-s
$array = array('Yellow', 'Blue', 'Green');
$array[15] = 'Red';
echo '<pre>';
print_r($array);
echo '</pre>';
unset ($array[1]);
echo '<pre>';
print_r($array);
echo '</pre>';
$sum = count($array);
echo $sum;
// Многомерные массивы
$array = array(
    array('name' => 'Bob', 'age' => 20),
    array('name' => 'Jack', 'age' => 30),
);
echo '<pre>';
print_r($array[0] {'name'});
echo '</pre>';
// Операторы сравнения
$e = '5 floors';
$f = 4.99;
// true -> "1"
// false -> ""
// echo $result;
var_dump($e !== $f);
// == (Равно), === (Тождественно равно), != (Не равно), <> (Не равно), !== (Тождественно не равно)
// < (Меньше), > (Больше), <= (Меньше или Равно), >= (Больше или Равно)
// Условные операторы - if,else,elseif
$r = 1;
$h = 2;
if ($r > $h) {
    echo $r;
    echo gettype($r);
} elseif ($r == $h) {
    echo "Variables are equal";
} else {
    echo $h;
}
// Преобразование в boolean
$array3 = array();
if ($array3) {
    echo 'Array with elements';
} else {
    echo 'Empty array';
}
// Switch-case
$day = 4;
//   if ($day == 1) {
//     echo 'Monday';
//   } elseif ($day == 2) {
//     echo 'Tuesday';
//   } elseif ($day == 3) {
//     echo 'Wednesday';
//   } elseif ($day == 4) {
//     echo 'Thursday';
//   } elseif ($day == 5) {
//     echo 'Friday';
//   } elseif ($day == 6) {
//     echo 'Saturday';
//   } elseif ($day == 7) {
//     echo 'Sunday';
//   } else {
//     echo 'Wrong Day';
//   }
switch ($day) {
    case 1: echo 'Monday'; echo $day; break;
    case 2: echo 'Tuesday'; echo $day; break;
    case 3: echo 'Wednesday'; echo $day; break;
    case 4: echo 'Thursday'; echo $day; break;
    case 5: echo 'Friday'; echo $day; break;
    case 6: echo 'Saturday'; echo $day; break;
    case 7: echo 'Sunday'; echo $day; break;
    default: echo 'Wrong Day';
}
/**
switch ($day) {
case 1: echo 'Monday'; echo $day;
case 2: echo 'Tuesday'; echo $day;
case 3: echo 'Wednesday'; echo $day;
case 4: echo 'Thursday'; echo $day;
case 5: echo 'Friday'; echo $day;
case 6: echo 'Saturday'; echo $day;
case 7: echo 'Sunday'; echo $day;
default: echo 'Wrong Day';
}
 */
$status = false;
//  if ($status) {
//    echo 'ON';
//  } else {
//    echo 'OFF';
//  }
// Тернарный оператор
// echo ($status) ? "ON" : "OFF";
$a =  ($status) ? "ON" : "OFF";
echo $a;
// Логические операторы
$a = 5;
$b = 10;
if (($a > 0) or ($b > 0)) {
    echo 'Two variables > 0';
}
// ЦИКЛЫ
// Цикл - while
echo '<pre>';
$i = 1;
// 1 <= 10 : TRUE
// 2 <= 10 : TRUE
// ...
// 11 <= 10 : FALSE
while ($i <= 10) {
    echo $i;
    $i = $i +1;
}
echo 'End of the program';
echo '</pre>';
echo '<pre>';
// Цикл - do-while
$i = 100;
do {
    echo $i;
    $i = $i +1;
} while ($i <= 10);
echo 'End of the program';
echo '<pre>';
// PRE & POST инкремент/декремент
//  echo 'POST increment <br />';
//  $a = 5;
//  echo "Should be 5:" . $a++ ."<br /> ";
//  echo "should be 6: " . $a . "<br />";
echo 'PRE increment <br />';
$a = 5;
echo "Should be 6:" . ++$a . "<br />";
echo "Should be 6:" . $a . "<br />";
// Цикл со счётчиком - "for:
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo '<pre>';
$students = array(
    array('name' => 'Victor', 'app' => 75), //0
    array('name' => 'Jack', 'app' => 5), //1
    array('name' => 'Billy', 'app' => 32), //2
    array('name' => 'Alex', 'app' => 26), //3
    array('name' => 'Kate', 'app' => 11), //4
);
for($i = 0; $i < count($students); $i++) {
//  echo $i;
    echo $students[$i]['name']. '- № of app'. $students[$i]['app'] .'<br />';
}
echo '<pre/>';
// Специальный цыкл перебора массивов - "foreach"
$students = array(
    array('name' => 'Victor', 'app' => 75), //0
    array('name' => 'Jack', 'app' => 5), //1
    array('name' => 'Billy', 'app' => 32), //2
    array('name' => 'Alex', 'app' => 26), //3
    array('name' => 'Kate', 'app' => 11), //4
);
foreach ($students as $i => $student){
    echo $i;
    echo $student['name'].'<br />';
}
// Управление циклами - "continue" & "break"
// continue
for ($k = 0; $k <= 50; $k++) {
    if (($k % 2) == 0) {
        continue;
    }
    echo $k;
}
// break
for ($k = 0; $k <= 50; $k++) {
    if ($k == 31) {
        break;
    }
    echo $k;
}

// Functions (Пользовательские функции) & Аргументы функции
function myFirstFunction($name, $surname) {
    echo "<h1>Hello My Friend, $name $surname</h1>";
}
//$name2 = 'James';
//   myFirstFunction($name2); // Одна и та же функция
   myfirstfunction('Jack','Rodriguez'); // Одна и та же функция
// myFirstFunction();
// $a; Разные переменные
// $A; Разные переменные
function myFirstFunction2($array) {
    foreach ($array as $name) {
        echo 'Hi man,' .$name;
    }
}
$array = array('Bob', 'Mike', 'Tad');
myFirstFunction2($array);

// Local & Global Visibility Scope (Области видимости переменных)
$a = 1;
function test($name= 'Roman') {
    $a = 2;
    echo $a;
}
test();
echo $a;

// Конструкция global & специальный массив $GLOBALS
$name1 = 'Barsik';
$name2 = 'Misha';
function test2 () {
    $name3 = 'Dunkan';
    echo '<br>'. 'Hello,' .$name3 .'<br/>';
    // Variant#1
    global $name1;
    echo 'Hello,' .$name1 .'<br/>';
    //Variant#2
    echo 'Hello,' .$GLOBALS['name2'] . '<br/>';
    $GLOBALS['name2'] = 'Pacha';
}
test2();
echo $name2;

// Transmission of Arguments on Reference (Передача аргументов по ссылке)
// & амперсант
function test3(&$beta) {
    $beta = 5;
}
$beta = 10;
test3($beta);
echo '<br>'. $beta .'<br/>' ;

// Static Variables
function howMuchCost () {
    static $a = 0;
    echo ++$a;
}
howMuchCost(); // 1
howMuchCost(); // 2
howMuchCost(); // 3
// Return of Values (Возврат значений)
function perimetr ($a, $b) {
    $r = (2*$a) + (2*$b);
    return $r;
}
$a = 10;
$b = 20;
$p = perimetr($a, $b);
echo '<br>'. $p .'<br/>';

// Recursive Function (Рекурсивная функция)
$array = array(
    'Auto-technique' => array( // 1 (Уровень вложености)
        'Bicycles' => array( // 2
            'Extreme' => 10, // 3
            'Author' => 4, // 3
        ),
        'Scooters' => 12, // 2
    ),
    'Avto' => array( // 2
        'Subaru' => array( // 3
            'Impreza' => 5, //4
        ),
        'Honda' => 10, // 3
        'Mitsubishi' => 11, // 3
    ),
    'Photo-Technique' => array( //1
        'Photo Cameras' => 6, // 2
        'Video Cameras' => 3, // 2
    ),
    'Other' => 3, //1
);
function sum($array, $level = 0) {
    static $count;
    static $items;
      var_dump ($level);
    if (is_array($array)){  // 2) Проверяем являеться ли массив массивом
        $level++;  // 3) увеличиваем уровень вложености
        foreach ($array as $element) {  // 4) Для всех элементов массива run цикл foreach
            sum($element,$level);       // в котором будет вызвана ф-я "sum"
              echo '<pre>';
              print_r($element);
              echo '</pre>';
        }
    } else {
        $count++;
        $items += $array;
          echo 'Not Array';
    }
    return array('count' => $count, 'items' => $items);
}
$result = sum($array);  // 1)вызываем ф-ю "sum" нашего массива
print_r ($result);

// Built-in possibilities (Встроенные Возможности)
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //с версии php 5.4 и выше можно использовать сокращённый способ записи массива
//  $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$arr2 = array_reverse($arr);
print_r($arr2);

// Functions for variables (Ф-и для работы с переменными)
$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$emptyString = '';
//echo 'Результат isset($emptyString) : ';
//var_dump(isset ($emptyString));
//echo '<hr/>';
//echo 'Результат empty($emptyString) : ';
//var_dump(empty ($emptyString));
//echo '<hr/>';
  echo 'Результат gettype($emptyString) : ';
  echo gettype($emptyString);
  echo '<hr/>';
//echo 'Результат is_array($emptyString) : ';
//var_dump(is_array($emptyString));
//echo '<hr/>';
//echo 'Результат is_array($arr3) : ';
//var_dump(is_array($arr3));
//echo '<hr/>';
//  echo '<pre>';
//  print_r(get_defined_vars());
//  echo '</pre>';

//// Formatting of strings (Форматирование строк)
$city = 'London';
$percent = 22 / 41 * 100;
$total =1000;
//  echo $percent;
$format = 'По данным статистики %1$.4f из %2$d опрошеных ... в городе %3$s ';//для указания
//  printf($format,$percent,$total,$city); //специальная ф-я форматированого вывода, которая принимает аргументы
// - формат а также переменные; сразу выводит значение
$result1= sprintf($format,$percent,$total,$city); //возвращает значения
print_r($result1);

// Work with strings (Работа со строками)
$s = 'Some string';
//  echo 'strlen($s):';
//  echo strlen($s); // позволяет находить длинну строки
//  echo 'substr($s, 0, 4):';
//  echo '<br>'. substr($s, 0, 4). '<br/>'; // позволяет получить часть строки(подстроку)
//  echo 'substr($s, 5, 6):';
//  echo substr($s, 5, 6). '<hr/>';
//  echo str_replace('s', '', $s); // вырезать все символы "s" из строки
//  echo '<br/>';
//  echo str_replace('string', 'column', $s ); // можем заменять определенные символы и их наборы в строке
//  echo '<br/>';
echo str_replace(array('s', 'o'),'_', $s); // не обязательно ограничиваться одним аргументом
echo '<br/>';
//echo str_replace(array('S', 'o'), array('1','2'), $s); // можем заменять на разные символы
$s1 = 'Another string, maybe';
$pieces = explode(',', $s1); //explode принимает разделитель и далее сама строка и возвращает массив с елементами
//  echo '<pre>';
//  print_r($pieces);
//  echo '</pre>';
echo '<br>';
echo implode('!', $pieces); //склеивает из массива строку
echo '<br/>';
echo implode('', $pieces);

// Math Functions (Математические ф-и)
$arr = [1,2,3,4];
$p = 3.1452356;
echo '<hr>';
echo 'max($arr):';
echo max($arr);
echo '<br>';
echo 'min($arr):';
echo min($arr);
echo '<br>';
echo 'rand(10,15): ';
echo rand(-1110,151); // при каждом запуске ф-и получаем разные значения
echo '<br>';
echo 'round($p):';
echo round($p);
echo '<br>';
echo 'ceil($p):';
echo ceil($p); // округляет число типа float к верхнему значению
echo '<br>';
echo 'floor($p):';
echo floor($p); // округляет число типа float к нижнему значению

// Work with arrays (Работа с массивами)

$arr = ['first' => 1, 'second' => 2, 'third' => 3];
echo '<hr/>';
var_dump(in_array(3, $arr)); // позволяет определить есть ли элемент с заданым значение в массиве
$values = array_values($arr);
print_r($values); //позволяет получить значение из массива
echo '<hr/>';
$values1 = array_keys($arr); //позволяет получить ключи из исходящего массива и отбросить значения
echo '<pre>';
print_r($values1);
echo '<pre/>';
$group1 = ['4125' => 'Opel', '2233' => 'Subaru', '3372' => 'BMW'];
$group2 = ['7372' => 'Chrysler', '6523' => 'Rolce Royce', '8892' => 'Jaguar'];
$commonGroup = $group1 + $group2; // оператор обьединения массивов
print_r($commonGroup);

$arr1 = [1,2,3,4,5];
$arr2 = [4,5,9,8,2];
//  echo '<hr/>';
//  print_r(array_intersect($arr1,$arr2)); // вычесляет схождение массивов, те елементы которые есть и в 1&2  массиве
echo '<hr>';
print_r(array_diff($arr1,$arr2));// вычесляет расхождение массивов, те елементы которые есть в 1 массиве но которых
// нет во втором

// Sorting of arrays (Сортировка массивов)
$arr3 = [56, 77, 82, 99, 0];
$arr4 =['3' => 'Avraam', '2' => 'Bill', '1' => 'George'];
echo '<hr/>';
sort($arr3);
ksort($arr4);
print_r($arr3);
print_r($arr4);

// Date $ Time (Дата и время)
echo '<hr/>';
$now = getdate(); //возвращает информацию о дате на текущий момент
print_r($now);
$timestamp = time(); // timestamp со времени начала эпохи UNIX(1 января 1970) до сейчас
echo $timestamp;
//  echo '<hr/>';
//  $seconds = 40;
//  $minutes = 19;
//  $hours = 15;
//  $day = 3;
//  $mon = 8;
//  $year = 2016;
//  $t = mktime($seconds, $minutes, $hours, $day, $mon, $year);// вернет timestamp определённой даты
//  echo $t;

// Formatting of date (Форматирование даты)
//  echo '<hr/>';
//  echo date("Y-m-d H:i:s");
//  echo date("F 1, Y");

// Linguistic constructions (Языковые конструкции)
echo '<hr/>';
echo '10';
//  die; // позволяет остановить выполнение программы(чаще используеться)
exit('8712638763'); //позволяет остановить выполнение программы
echo '20';
echo '<hr/>';

$array = array('Value1', 'Value 2');
list($var1,$var2) = $array;
echo $var1,$var2;

//mysqldump -hmysqlMini -uhedgento -pg27E4Q7R8wT24TM hedgento > var/backups/hedgento_20160614.sql – create dump of mysql
//mysql -hmysqlMini -uhedgento -pg27E4Q7R8wT24TM hedgento < var/backups/hedgento_20160614.sql - insert dump of mysql