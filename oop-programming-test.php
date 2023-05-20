<?php 
// Just code and oop testing


/**
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

	// 
	public function getName($name): void
	{
		echo $name;
	}
	
}


$pub = new Pub;
echo "<pre>";
var_dump($pub::frutz('123', '123'));
echo "<pre>";

$pub->getName('Alex');


