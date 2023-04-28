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
echo $mid;