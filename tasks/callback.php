<?php 
echo "<h3><i>callable type and callback function</i></h3>";
echo "---------------------------------------------------";
// вызов в аргументе функций и анонимных функций 
// callbacks
// анонимная функция - т,е без имени
$callback = function($param)
{
    echo "вы вызвали функцию - $param";
};

// $callback('slavik');
// callback функция т,е. функция в аргументе другой функции

function perfomOperation($data, $callback)
{
    // execute operations
    $result = $data * 2;
    // run callback - передали в нее наши данные
    $callback($result);
}
// perfomOperation(9, $callback);

// callback на примере простой функции
function regularSum($sum)
{
    echo "колличество операций: $sum";
}

function errorSum($error)
{
    echo "колличество операций не найдено. ошибка: $error";
}
// используя функции для вызова пользовательских функци call_user_func
function xpDeveloper($x, $callback)
{
    $res = $x + 2;
    if ($res == 4) {
        call_user_func($callback, $res);
    } else {
        errorSum(404);
    }
}
// xpDeveloper(2, 'regularSum');
// 010101010101010100101010100100101010101001010010

$num = [5,1,8,2,9];
// sort up (asc)
function compareAscending($a, $b)
{
	return $a - $b;
}
// sort down (des)
function compareDescending($a, $b)
{
	return $b - $a;
}
// up
// echo "<pre>";
// usort($num, 'compareAscending');
// print_r($num);
// echo "</pre>";
// // down 
// echo "<pre>";
// usort($num, 'compareDescending');
// print_r($num);
// echo "</pre>";
// функция обратного вызова - для фильтрации нечетных  чисел

$nm = [1,2,3,4,5,6,7];
function filterOdd($val)
{
	return $val % 2 != 0;
}

$oddNumbers = array_filter($nm, 'filterOdd');
echo "<pre>";
// print_r($oddNumbers);
//
// class events
class Event 
{
	private $listeners = [];

	// регистрация обратного вызова
	public function registerListener($callback)
	{
		$this->listeners[] = $callback;
	}
	
	// вызов всех загрегестрированных кэлбэков
	public function trigger()
	{
		foreach($this->listeners as $listener)
		{
			call_user_func($listener);
		}
	}

} 

// made it event
$e = new Event();
// 
$e->registerListener(function()
{
	echo "move on load";
});
echo "<br>";
$e->registerListener(function()
{
	echo "<br>движение это жизнь<br>";
});
// push it
//  хоть сколько делай эти событий
// $e->trigger();

$extreme = function()
{
	return  "good job";
};

function test_my_func($func)
{
	echo $func();
}

// test_my_func($extreme);

/*101010101001001001001010100100101001001001010010101001010010100100010010100010110001001*/

class ObjectTestReadyMethod
{
	public function testMethod()
	{
		echo "hello it`s test method";
	}
}

function processCallback(callable $callback)
{
	$callback();
}

$obj1 = new ObjectTestReadyMethod;
processCallback([$obj1, 'testMethod']);


/*пример сортировки c испльзованием callable*/
function customSort($a, $b)
{
	return $a - $b;
}

$numbers = [4,3,1,7,-20,2];
echo "<br>сортировка чисел<br>";
print_r($numbers);
echo "<br>";
/*use callback function*/
usort($numbers, 'customSort');
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<br>";

/*===================================================*/
/*дальше - callback для обработки элементов массива*/

function uppercase($val)
{
	return strtoupper($val);
}

echo "<br>Сортировка Имен преобразоване в Высокий регистор<br>";
$names = ['Slavik', 'Johg', 'Michael'];
$nameUppercase = array_map('uppercase', $names);
print_r($nameUppercase);
/*--------------------------------------------------*/
/*фильтрация массива*/
function isEven($val)
{
	return $val % 2 === 0;
}

function isResult($val)
{return $val;}

/*arr*/
$nubmers_1 = [1,2,3,4,5,6,7,8];
$strpage = ['home', 'quiq', 'singIn', 'reg-in'];
/*push*/
$evenNumbers = array_filter($nubmers_1, 'isEven');
/*$evenPage = array_filter($strpage, 'isResult', ARRAY_FILTER_USE_KEY);*/
$evenPage = array_filter($strpage, 'isResult', ARRAY_FILTER_USE_BOTH );
/*res*/
echo "<br>";
print_r($evenNumbers);
echo "<br>";
print_r($evenPage);