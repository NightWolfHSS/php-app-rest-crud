<?php 
// test OOP code
class Main 
{
	private $argx;

    public function __construct($arg) 
    {
		$this->getSectret($arg);
    }

	private function getSectret($argx)
	{
		echo $argx;
	}
}
// you can see value
// $app = new Main('slavik');


//  linear search
// полезно максимум для 100 элементов O(N) 
/** 
* @return elem | -1
*/
class LinkedSearch {

    private $data = [];

	public function __construct($data, $elem) 
	{
        for($i = 0; $i <= count($data); $i++) {
            if ($data[$i] == $elem) {
            	echo $data[$i];
            	return true;
            }
        }
        echo " искомый элемент не был найден";
        return -1;
	}

}

$data = [1, 'audi', 'bmw', 'mercedes', 'vw', 2, 10];
// $linear = new LinkedSearch($data, 'vw');

// (binarySearch) двоичный поиск - сложность O(log N)
 // массив из 100 000 потребуется всего 17 сравнений 
 // быстрее линейного

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
$x = 1; 
$y = 0;
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