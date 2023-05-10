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

$app = new People;
$app->getPerson('slavik'); // run from abstract class
echo "<br> супер пользователь " . $app->superPersonAdmi('Alex');
echo "<br> зверюшка " . $app->petsOfPerson('the cat Saimon');



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
