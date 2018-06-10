<!DOCTYPE html>
<html lang="en-ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="description" content="The Subaru Impreza, prices, comments, specification"/>
    <meta name="keywords" content="subaru, impreza, turbo, WR1, UK300, wrx, sti"/>
    <meta name="robots" content="NOINDEX,NOFOLLOW" />
    <title>Subaru Impreza - Get You Dream Car</title>
    <meta name="viewport" content="width=1020 px">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>
<header>Selling, service and prices</header>
<nav>
<ul>
    <li>Main</li>
    <li>News</li>
    <li>Prices</li>
    <li>Contacts</li>
</ul>
</nav>
<aside>
    <ul>
        <li>Main</li>
        <li>News</li>
        <li>Prices</li>
        <li>Contacts</li>
    </ul>
    </nav>
</aside>
<article>
    <p>Content will be here</p>
</article>
<footer>
    <div>Copyright</div>
</footer>
</body>
</html>

<?php
echo "Hello World";
// phpinfo();
// Переменные
// $thisIsMyVariable = 1; // camel case
// echo $thisIsMyVariable;
$a = 1;
echo $a;
echo __DIR__;
// Константы
define (MY_CONST, "Hello");
const MY_CONST = "Hello";
print MY_CONST;
// Операторы
$x =2;
$x += 2;

echo $x;
$var = false;
var_dump($var);

// Массивы и циклы
//$cars = array();
// Ассоциативный массив
$age = array(
    "Peter" => "35",
    "Ben"   => "37",
    "Joe"   => "43",
    );
print_r($age);

$params = ['Search' => 'Andrew'];
$default = ['Limit' => 10];
print_r (array_merge($params,$default));

//$x = 5;
//$u = 8;
//switch ($x,$u){
//    case 1: echo $x + $u; break;
//    case 2: echo $x - $u; break;
//    case 3: echo $x * $u; break;
//    case 4: echo $x / $u; break;
//
//}

//echo '<pre>';
//print_r ($_SERVER);

// Пользовательские функции

// require();
// include();
// date('Y');
// require_once();
// include_once();
// array_rand(); - достаёт ключи и создает 4 елемента
// implode - преобразовывает массив в строку с общим обьединителем
// action

//Streams
//fopen()

$arr = array('White' => 'Jaguar', 'Black' => 'BMW', 'Yellow' => 'Lamborgini');
function displayingArray($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
displayingArray($arr);

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";

//ООП
//Class and Object

class Human
{
public $fingerCount = 20;
}
$male = new Human();
$property = 'fingerCount';
echo $male->$property;
echo $male->fingerCount;


//Examples
class ShopProduct{
    public $title = 'The Lord of The Ring';
    public $authorLastName = 'Tolkien';
    public $authorFirstName = 'J.R.R.';
    public $price =30;

    public function __construct()
    {
    }
    public function getFullName()
    {
    return $this->authorFirstName." ". $this->authorLastName;
    }

}
$book = new ShopProduct;

// Exercises - Обращение к свойствам объекта, Методы классов / объектов
interface User_Interface
{
// public function getName();
    public function login();
    public function logout();
}

class User implements User_Interface
{
    private $name;
    protected $isLogged;
    public function login()
    {
        $this->isLogged=true;
        echo $this->isLogged;
        echo 'Login <br>';

    }
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $val)
    {
        $this->$attribute=$val;
    }

    public function logout()
    {
        $this->isLogged=false;
        echo $this->isLogged;
        echo 'Logout <br>';
    }
}
$mike = new User;
$jim = new User;
$misha = new User;
$jack = new User;
echo $jack->name='Jack';
$linda = clone $jack;
echo $linda->name='Linda';

$mike->name='Mike';
$mike->login();
$jim->name='Jim';
$jim->logout();
$misha->name='Misha';

class Manager extends User
{
    public function login()
    {
        $this->isLogged = 'Hi Manager';
        echo $this->isLogged;
    }
}
$manager1 = new Manager;
echo $manager1->name='Emanuel <br>';
$manager1->login();
class Admin extends User
{
    public function logout()
    {
        $this->isLogged = 'Hi Admin';
        echo $this->isLogged;
    }
}
$admin1 = new Admin;
echo $admin1->name='Zack <br>';
$admin1->logout();

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    public function showBrand()
    {
        echo $this->brand;

    }
    public function showModel()
    {
        echo $this->model;
    }
    public function setPrice($price)
    {
        $this->price = round($price, 2);
        echo $this->price;

    }
    public function getPrice($format = false)
    {
        if ($format) {
            return number_format($this->price, 1);
        }
        echo $this->price;
    }
}

$car1 = new Car;
$car2 = new Car;
$car3 = new Car;

$car1->brand = 'Toyota';
$car1->model = 'Corolla';
$car1->year = '2000';
$car1->driver = $mike;
$car1->showBrand();
$car1->showModel();
echo $car1->setPrice(10.7345734);
echo $car1->getPrice(5);
//print_r(array($car1->brand,$car1->model,$car1->year,$car1->driver));
echo '<br>';
$car2->brand = 'Mazda';
$car2->model = '6';
$car2->year = '2015';
$car2->driver= $jim;
print_r(array($car2->brand,$car2->model,$car3->year,$car2->driver));
echo '<br>';
$car3->brand = 'Ford';
$car3->model = 'Taurus';
$car3->year = '1995';
$car3->driver = $misha;
print_r(array($car3->brand,$car3->model,$car3->year,$car3->driver));
echo '<br>';

class WaterCar extends Car
{
    public $waterSpeed;
}
$wCar1=new WaterCar;
echo $wCar1->brand='Prius';

//Статические Методы
class Fraction
{
    public static function view($x,$y)
    {
        return $x . '/' . $y. '='.self::exec($x, $y);

    }


    public static function exec($x,$y)
    {
        try {
            if ($y == 0) {
                throw new Exception('Деление на ноль.');
            }
        }catch(Exception $e) {
            echo $e->getMessage();
        }
        return $x/$y;
    }
}

echo '<br>';
echo Fraction::view(5,0);

echo '<br>';
class GoodClass
{
    private static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }


    public static function getCounter()
    {
        return self::$counter;
    }
}
$good1 = new GoodClass;
$good2 = new GoodClass;
$good3 = new GoodClass;
echo GoodClass::getCounter();
echo '<br>';

//Привести массив к объекту.
echo '<br>';
$b= ['name' => 'Roman', 'email' => 'test@test.com', 'message' => 'GO'];
$object = (object)$b;
var_dump($object);