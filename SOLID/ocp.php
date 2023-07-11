<?php  
/*OCP*/
/*

Принцип открытости/закрытости (Open/Closed Principle, OCP) гласит, что программные сущности, такие как классы, модули или функции, должны быть открыты для расширения, но закрыты для модификации. Другими словами, поведение сущности должно быть изменяемо путем добавления нового кода, но не путем изменения существующего кода. Это позволяет создавать системы, которые могут быть легко расширены без необходимости внесения изменений в уже существующий код.

*/
interface Shape
{
	public function area();
}

class Reactangle implements Shape
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width  = $width;
	}

	public function area()
	{
		return $this->height * $this->width;
	}
}

class Circle implements Shape
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area()
	{
		return pi() * pow($this->radius, 2);
	}
}


class AreaCalculator
{
	public function calculator($shapes)
	{
		$area = 0;

		foreach($shapes as $shape)
		{
			$area += $shape->area();
		}

		return $area;
	}
}

/*
В этом примере у нас есть интерфейс Shape, который определяет метод area(). Затем у нас есть два класса Rectangle и Circle, которые реализуют этот интерфейс и предоставляют свою реализацию метода area(). Обратите внимание, что AreaCalculator не зависит от конкретных классов Rectangle и Circle, а зависит только от интерфейса Shape.
\
\\
\
Это позволяет нам легко добавлять новые фигуры, расширяя интерфейс Shape и создавая новые классы, реализующие этот интерфейс. Например, мы можем добавить новый класс Triangle:

*/

class Triangle implements Shape
{
	private $base;
	private $height;

	public function __construct($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function area()
	{
		return ($this->base * $this->height) / 2;
	}
}

/*
Мы можем использовать AreaCalculator для вычисления площади для всех видов фигур, не изменяя код класса AreaCalculator. Это демонстрирует принцип открытости/закрытости (OCP) в действии, так как мы можем расширять функциональность системы, добавляя новые классы, не затрагивая уже существующий код.
*/

/*========================================*/
/*
ты не трогаешь этот класс ты его просто расширяешь или наследуешь или меняешь но только его поведение
для изменения он закрыт - но ты можешь его расширить
*/
abstract class Storm
{
    abstract public function xp();
}

class Sound extends Storm
{
	private $music; 

	public function startModule($molude)
	{
		$this->music = $molude;
	}

	public function soundXp()
	{
		return $res = $this->music;
	}

	public function xp()
	{
		echo "this is autoCar sound club";
	}

}


class Person extends Storm
{
	private $xp = "100";

	public function __construct()
	{
		$this->xp($this->xp);
	}

	public function xp()
	{
		echo $this->xp;
	}

}
/*
$sound = new Sound;
$person = new Person();*/
/*$sound->xp();
echo "<br>";
$sound->startModule("включение realteck");
echo $sound->soundXp();*/


abstract class Sp
{
	abstract public function calculateArea();
}

class Reactangle2 extends Sp
{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	public function calculateArea()
	{
		return $this->width * $this->height;
	}
}


class Circle2 extends Sp
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function calculateArea()
	{
		return pi() * pow($this->radius, 2);
	}
}

$circle2 = new Circle2(24);
echo $circle2->calculateArea();