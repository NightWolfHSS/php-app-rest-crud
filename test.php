<?php 
// just simple code primitive and practic php code
$left = 2;
$right = 2;
$mid = ($left + $right) / 2;
// echo $mid; 2

// just test code 


function test_code_vv() 
{
  $age = 'age = 21';
  $static = 'age';
  return $$static;
}
$voice = test_code_vv();

$res_space = preg_replace("/[^0-9]/", "", $voice);
// echo $res_space; number
// echo test_code_vv(); string

// href an variable
// $x = 'y';
// $y = 'x';
// echo $$x;

// href variable
// $fox = 5;
// $axe = $fox;
// echo $axe;

// use operations
// $x = 50;
// $x *= 100;
// echo $x;

// type or value | bool
$x = 0; 
$y = 1;
// $res = $x === $y;
// // echo $x == $y; // false | 0
// echo $res; // false | 0
// echo $town = $x <> $y; // true 
// echo $town = $x != $y; // true
// echo $city = $x !== $y; // false
// echo $city = $x > $y; // true
// echo $city = $y > $x; // false
// echo $city = $y >= $x; // false
// echo $city = $y <= $x; // true

// $res = $x or $y; true
// $res = $x and $y; true
// $res = $x xor $y; true
// $res = $x && $y; false
// $res = $x || $y; true
// $res = !$x; true
// $num1 = 6; $num2 = 3;
// $res = $num1 > 1 && $num2 < $num1; // true
// $a=2; $b=$a++;

// $foxTime = 22; 
// $foxTime++; // echo $foxTime; inc 23

// ARRAYS
// $name1 = 'David';
// $name2 = 'Slavik';
// $name3 = 'Kaptain Hook';
// // var_dump($name1, $name2, $name3);

// // numbers array | index begin = 1 
// $names = array('David', 'Slavik', 'Kaptain Hook');
// // var_dump($names); you can see index
// // ALT
// $names[0] = 'David';
// $names[1] = 'Slavik';
// $names[2] = 'Kaptain hook';

// // var_dump($names[2]);

// $mixArr[0] = "Slavik";
// $mixArr[1] = "<strong>PHP</strong>";
// $mixArr[2] = 25;
// echo "$mixArr[0] is $mixArr[2] and knows $mixArr[1]";

// RELATIONS ARRAYS
// $people = array(
//     'David' => '21',
//     'Amy'   => '13',
//     'Kaptain' => '40'
// );
// // var_dump($people['Kaptain']);
// // or
// $people['David'] = '21';
// $people['Amy'] = '13';
// $people['Kaptain'] = '40';
// var_dump($people['David']);

// multidimensional arrays
// $people = array(
//   'online' => array('David', 'Ami'),
//   'offline' => array('John', 'Rob'),
//   'away'   => array('Arthur', 'Daniel')
// );
// echo $people['online'][0];
// echo $people['offline'][1];

// $items = array('box', 'irtems', 'goodlich');
// var_dump($items);
// $c = 'b';
// $b = 'a';
// $a = 'c';
// $item = $$c=$$b;
// echo $$b;


// CONSTANTS php - before 5.3 use [define] | after 5.3 use [const]  .
// constant use only scalar type variables int | float | string | boolean

define('BIGDATA', 100.0000);
define('BIG', 1000);
define('SPITEM', 'superworkprinter');
// define( 'FOO', array(1) );  php 5.6

// const BASEVAR = 'my own app';
// const MIXX = 1221122;
// BEGIN PHP 5.6
// you can use scalar
// const FOO = 1 + 2;
// const FOO = [1,2,3];
// var_dump(FOO);
// BEGIN PHP 7.0
// define( 'FOO', [1, 2, 3] );


// echo BASEVAR;
// echo gettype(SPITEM); string
// echo gettype(BIGDATA); double
// echo gettype(BIG); int

// $box = [];
// $kik = is_scalar($box); false

// разница const define

// here will error
// if (1) { 
//     const NAME = 'VALUE';
//     echo NAME;
// }
//  it working
// if (1) {
//     define('NAME', 'VALMAX');
//     echo NAME;
// }


// register define Up != lover 
// define( 'NAME', 'VALUE', true );
// define('supra', 'yes');
// define('SUPRA', 'no'); defferent values
// const always 
// const SUPRA = 'supercars';
// const supra = 'you know you reset it variable';

// const зависит от пространства имен 
// define будет доступен за пределами namespace

// константы класса php
class Example
{
    const NAME = 'VAR';
    //  begin php 5.6
    const SEC_PER_DAY = 60 * 60 * 24;
    public function print_name()
    {
        echo self::NAME;
    }
}
// $app = new Example();
// $app->print_name();
// echo Example::NAME;

// begin php 7.1.0
class Foo
{
    public const BAR = 'public';
    private const FIX = 'private';
    static $mix_a_noice = 'nfs prostreet ';
}
// похоже со статическими переменными 
// статическую переменную php компилятор не удаляет
// echo Foo::$mix_a_noice; static variables
function funcExtreame()
{
    // $int 1111111111
    static $int = 0;
    $int++;
    echo $int;
}
// for($i = 0; $i++<10;) funcExtreame();
// простая переменная будет обнулятся статичная будет сохранять значение              

// MAGIC CONST 
// echo __LINE__; current lines
// echo __FILE__; current file
// echo __DIR__; current dir and file
// function xxx()
// {
//     echo __FUNCTION__; current name function
// }
// xxx();
// class Boxwill
// {
//     public function __construct()
//     {
//         echo __CLASS__; current name class
//     }
// }
// $bpx = new Boxwill();

// __TRAIT__
// __METHOD__ name method of class
// __NAMESPACE__ namespace
// ClassName::Class full name class  ::class


// callable function callback 

echo "you can see test.php file";