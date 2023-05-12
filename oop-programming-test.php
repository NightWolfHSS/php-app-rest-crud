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

}

class Pi extends Test
{
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
}


$test = new Test;
// echo $test->move;

$pi = new Pi;
// echo "hello - I`m " . $pi->getName('slavik') . "<br>";
// echo $pi->testUseDefaultVarible();
// echo "<br>";
// // set value
// $pi->useDefaultVar('Engine is power');
// echo $pi->getDefaultVar(); // if empty getting default variable

// echo $pi->default = "ура я победил ";
// $pi->xpTest('sss'); // will error 
// echo $pi->getXp(); get data