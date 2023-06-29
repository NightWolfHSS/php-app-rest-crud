<?php 
// Just code and oop testing

include '../Services/Service.php';

/**
* справочник - пиши ctrl + f и ищи 
* abstruct | polymorphism
* oop 
* get and set name for Admin | user | pets
*/  
abstract class AbstrPerson
{
	abstract protected function setName($name);

	public function getPerson($name)
	{
		print $this->setName($name);
	}
}

/**
 * set Name person
 */
class People extends AbstrPerson
{
    // person
	protected function setName($name)
	{
		return $name;
	}

	// superuser
	public function superPersonAdmi($name)
	{
		return $this->setName($name);
	}

	// name pets
	public function petsOfPerson($name)
	{
       return $this->setName($name);
	}

	// ...
}

// $app = new People;
// $app->getPerson('slavik'); // run from abstract class
// echo "<br> супер пользователь " . $app->superPersonAdmi('Alex');
// echo "<br> зверюшка " . $app->petsOfPerson('the cat Saimon');



/**
* abstruct | polymorphism
* publication 
*/  
abstract class Publication
{
	abstract public function renderText();
}


class News extends Publication
{
	public function renderText()
	{
		return "<h1>Главная новость</h1>";
	}
}

class Announcement extends Publication
{
	public function renderText()
	{
		return "<h2>Публикации к статьям</h2>";
	}
}


$publications[] = new News;
$publications[] = new Announcement;

foreach($publications as $publication)
{
	if ($publication instanceof Publication) {
		echo $publication->renderText(); // render data
	} else {
		echo "data is empty";
	}
}


// OOP inheritance
// наследование или расширение класса
// we alse use getter and setter

class Market 
{

	private $price;

	public function getProduct()
	{
		return $this->product;
	}

	public function setProduct($product) 
	{
		$this->product = $product;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
}


class Milk extends Market 
{ 
	private $name;
	private $priceMilk;

	public function setNameMilk($name)
	{
		$this->name = $name;
	}

	public function setTestOwn($product)
	{
		$this->product = $product;
	}

    public function getTestOwn()
    {
    	return $this->product;
    }

	public function getNameMilk()
	{
		return $this->name;
	}

	
}

// $milk = new Milk;
// $milk->setTestOwn('тут кто то есть');
// echo $milk->getTestOwn();




class Test
{
    private $default = 'i like to use single quotes';
	public $move;
	public function engine($move)
	{
		$this->move = $move;
	}

	public function getEngine()
	{
		return $this->move;
	}

	private function testP()
	{
		echo "это приватный метод и ты его просто так видеть не должен";
	}

}

class Pi extends Test
{

	private $fox;
	public function getName($move)
	{
		parent::engine($move); 
		return parent::getEngine();
	}

	public function testUseDefaultVarible()
	{
		return $this->$default;
		// hmm why is empty like a mistake?
		// just Empty
	}

	public function useDefaultVar($default)
	{
		$this->default = $default;
	}

	public function getDefaultVar()
	{
		return $this->default;
	}


	private function xpTest($xp)
	{
		return $this->xp = $xp;
	}


	public function getXp()
	{
		return $this->xpTest('точно в цель');
	}

	private function getTestResult()
	{
		return 'name is not defined';
	}

	public function getTestPrivateMethod()
	{
		return $this->getTestResult();
	}
}


// $test = new Test;
// $test->testP(); private
// echo $test->move;

// $pi = new Pi;
// $pi->default = "2"; private, but you can see the result
// echo $pi->default; // you can see result
// $pi->testP(); private
// echo "hello - I`m " . $pi->getName('slavik') . "<br>";
// echo $pi->testUseDefaultVarible();
// echo "<br>";
// // set value
// $pi->useDefaultVar('Engine is power');
// echo $pi->getDefaultVar(); // if empty getting default variable

// echo $pi->default = "ура я победил ";
// $pi->xpTest('sss'); // will error 
// echo $pi->getXp(); get data from private method
// $pi::getTestResult();// error private
// echo $pi->getTestPrivateMethod();// get result

// *********************
// encapsulation | type-Hinting begin 7.0.0

class Base 
{
	//  недоступен для всех
	private $color = 'null';
	// метод обьектов 
	public function inferno(int $fix)
	{
		echo $fix;
	}

 	public function setColor(string $color)
 	{
 		$this->color = $color;
 	}

	// получим свойство текущего обьекта value
	public function getColor()
	{
		return $this->color;
	}
}  
// $bs = new Base;
// $bs->inferno('asdasd'); error 
// $bs->color = 'Red';
// $bs->setColor('Red'); 
// echo $bs->getColor();
// echo $bs->color; private
// echo $bs->getColor(); и получаем свойство текущего обьекта - класса
// $bs1 = new Base;
// $bs1->color = '<br>orange';
// echo $bs1->color;
// $bs->inferno();


// ура пример композиции 
// создать обьект и использовать его метод внутри другого класса без наследрвания 
// минус - связывание, плюс управление временем обьекта 
class BassCloud
{
	public function soundCloud()
	{
		return 'Deaf-Bounce';	
	}
}

class Car
{
	protected $cloudSound;
	
	public function __construct()
	{
		$this->cloudSound = new BassCloud;
	}

	public function currentAuto($mark)
	{
		echo 'в машине марки: ' . $mark . ', установлена фирма: ' . 
		$this->cloudSound->soundCloud();
	}
}

// $audi = new Car();
// $audi->currentAuto('audi');

// агрегация 
// плюсы - легко создать новый обьект - минусы много переменных 

class TrapNation
{
	public function trapMusic()
	{
		return 'good music is playing on your phone';
	}
}

class Person
{
	protected $music;

	public function __construct($music)
	{
		$this->music = new TrapNation;
	}

	public function playSound()
	{
		echo $this->music->trapMusic();
	} 
}

$music = new TrapNation;
$person = new Person($music);
// $person->playSound(); work it

// get Data static method

// use Error, it a nice tools
// class Mag
// {
// 	public static function frutz(int $name)
// 	{
// 		if (!is_int($name)) {
// 			throw new Exception("это не число - вы не можете учавствовать");
// 		} 

// 		try {
// 			echo $name;
// 		} catch (Exception $e) {
// 			echo 'Error => ', $e->getMessage() . "<br>";
// 		}
// 		return $name;
// 	}
// }





// $mag = new Mag;
// var_dump($mag::frutz('123')); 


// TypeHint
class Pub
{
	public static function frutz(string $name, int $age)
	{
		return $elems = [$name, $age];
	}

	// only show  | cannot be returned | void
	public function getName($name): void
	{
		echo $name;
	}
  
    // может быть и не строкой | рекомендация строка | не может быть пустой
	public function noice(?string $noice): bool
	{
		return $noice;
	}

    /**
     * getting string | object
     * @return array;  
     */
	public static function getAway($name, $func)
	{
		return $box = $name." ". $func($name);  
	}

}
// ////////////


// IoC - Inversion of Control;

class FrontController
{
	private $service;

	public function __construct(Service $service)
	{
		$this->service = $service;
	}

	public function index()
	{
		// return json_encode($this->service->getData()); string
		return $this->service->getData(); // data
	}

}
// IoC
//  но таких классов может быть много
$frontC = new FrontController(new Service(new MsqRepository()));
// echo "<pre>";
// var_dump($frontC->index());
// echo "</pre>";

// Dependency injection
// внедрение зависимости DI
// constructor injection 
class Programmer
{
	private $skills;

	public function __construct($skills)
	{
		$this->skills = $skills;
	}

	public function totalSkills()
	{
		return count($this->skills);
	}
}

$createSkills = array('PHP', 'JAVASCRIPT', 'SQL', 'AJAX', 'OOP', 'MVC', 'SOLID', "API");
// $person = new Programmer($createSkills);
// echo $person->totalSkills();

// Setten injection 

class Machine 
{
	private $engine;

	public function setEngine($engine)
	{
		$this->engine = $engine;
	}

	public function getEngine()
	{
		return json_encode($this->engine);
	}
}

// $kikdown = new Machine;
// $sortEngine = ['Russ', 'Eugene', 'Eji20', 'Rb26', 'jz???'];
// $kikdown->setEngine($sortEngine);
// echo $kikdown->getEngine();

// just test a typehint

// Следовательно, из статического метода невозможно получить доступ к объекту
// Внутри него $this просто не существует
class ExtreameTest
{
	private $items;

	/**
	 * контрокор принимает определенный класс в
	 * данном случае Memory имя соответствующего класса
	 * TypeHint Class Memory - и никакой другой класс | 
	 */ 
	public function __construct(Memory $memory)
	{
		$this->memory = $memory;
	}

    /**
     * typehint: 
     * string|int|bool|float|object|unset|array|
     * void: nothing is returned| you can't return anything
     * and Object class (B $b)
     * current we use Array
     */
    public function testType(array $items)
    {	
    	$this->items = $items;
    }
    /**
     * @return items
     */
    public function getItems()
    {
    	return $this->items;
    } 

    /**
     * @return value 
     * Class Memory
     */
    public static function getXp($xp)
    {
		return Memory::xp($xp);
    }

}


class Memory
{
	public function __construct()
	{
		echo "ты создал класс memory";
	}

	public static function xp($xp)
	{
		return "вы получили: ".$xp. " опыта";
	}
}

$boxTimes = ['cool', 'time', 'elem', '123', 123];
// new elem
// $exp = new ExtreameTest(new Memory);
// echo "<br>";
// echo ExtreameTest::getXp('12');
// echo "<br>"; 
// // set array elems 
// $exp->testType($boxTimes);
// $fox = $exp->getItems();
// echo "<pre>";
// var_dump($fox);
// echo "<pre>";

class Dinamix
{
	private static  $xp;

	// статика Uncaught Error: Using $this when not in object context 
	// динамически ты не получиш статичным методом данные 
	public static function xp($xp)
	{
		self::$xp = $xp;
	}

	// динамика
	public function secondXp($xp)
	{
		$this->xp = $xp;
	}

	// получение данных динамика
	public function getXp()
	{
		$xp_box = $this->xp;
		return $xp_box;
	}

	// получение данных статически - failed
	public static function getSXp()
	{
		$xp_box = self::$xp;
		return $xp_box;
	}
}


// ИСПОЛЬЗУЕТСЯ СТАТИКА КОГДА НАМ НЕ НУЖЕН ОБЬЕКТ А ДАННЫЕ ПО УМОЛЧАНИЮ
// array
// $xp = ['ходить ', 'бродить', 'бежать', 'идти'];
// $app = new Dinamix;
// $box = Dinamix::xp($xp); 
// $app->secondXp($xp); //set data
// // $box = $app->getXp(); // Успех - данные получены 
// $box = Dinamix::getSXp();
// var_dump($box); 
// var_dump($box); посмотреть набор - массив

/*Полиморфизм*/
/*реализация задач одним методом*/

/* слишком сырой пример*/
// class Shape
// {
// 	public function getArea()
// 	{
// 		/*realize summ a figure*/
// 	}
// }

// class Rectangle extends Shape
// {
// 	public function getArea()
// 	{
// 		/*realize */
// 	}
// }

// class Circle extends  Shape
// {
// 	public function getArea()
// 	{
// 		/*realize*/
// 	}
// }


abstract class Shape {
	abstract public function getArea();
}

class Reactangle extends Shape
{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	public function getArea()
	{
		return $this->width * $this->height;
	}

}

class Circle extends Shape
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getArea()
	{
		return pi() * $this->radius * $this->radius;
	}

}

$shapes = [
	new Reactangle(5, 10),
	new Circle(3)
];

foreach($shapes as $shape)
{
	echo "Площадь: " . $shape->getArea() . "<br>";
}

echo "<Br>";





/*another test*/
/*class Personn {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Personn('John', 25);
$persor = new Personn('sJohn', 25);*/
/*echo $persor->name;
echo $person->name; // Выведет 'John'
echo $person->age; // Выведет 25*/

/*наследование*/

class Animal 
{
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function eat()
	{
		echo "{$this->name} кушает <br>";
	}

	public function sleep()
	{
		echo "{$this->name} спит <br>";
	}

}

/*child */
class Cat extends Animal
{
	public function meow()
	{
		echo "{$this->name} says meow . <br>";
	}

	public function age()
	{
		echo "нашей зверюшке {$this->age} года <br>";
	}

}
/*create obj ext animal*/
$animal = new Animal('Лев', 6);
$cat = new Cat('Barsic Mole', 2);

/*run animal*/
$animal->eat();
$animal->sleep();
/*run cat */
$cat->eat();
$cat->sleep();
$cat->meow();
$cat->age();
