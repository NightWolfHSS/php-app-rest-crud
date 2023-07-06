<?php 
// итерируемые  обьекты (iterables)
// ***********************************************************
//  Он принимает любой объект (например, массив), реализующий интерфейс Traversable. Этот тип использует конструкцию foreach или функцию генератора, которая выдает одно значение за раз.

// что такое итерируемый обьект - Итерируемым является любое значение, которое можно перебрать в цикле foreach()
// В качестве типа данных аргумента функции или в качестве возвращаемого типа функции может быть использовано ключевое слово iterable:

function printIterable(iterable $arr)
{
	foreach ($arr as $key) {
		echo $key . "<br>";
	}
}

// $arr = ['итерируемый', 'обьект', 'php'];
// printIterable($arr);

// Iterable также может использоваться в качестве возвращаемого типа, чтобы указать, что функция вернет итеративное значение:

// 
function getIterable(): iterable 
{
	return ['итерируемый', 'object', 'php'];
}
$myIterable = getIterable();
foreach($myIterable as $item)
{
	echo $item . "<br>";
}

// texttexttexttexttexttetxtetxtetxtetxtetxtetxtetxtetxtetxtetxtetxtetxtetxtetxtettetxtetxtetxtetxttetxtetxtettxtetxt

// just test code 
// public $tank;
  
// public function fill($float)
// {
// 	$this-> tank += $float;

// 	return $this;
// }