<?php 
 // "service container";

// DIP use with constructor 
class Person
{
	public function generateIdea($idea, $name)
	{
		return $idea . ", " . $name;
	}
}

class SchoolIdea
{
	protected $idea;

	public function __construct(Person $idea)
	{
		$this->idea = $idea;
	}

	public function runIdea($idea, $nameChild)
	{
		return $this->idea->generateIdea('Идея, кто придумал- '.$idea, $nameChild);
	}

}


// $person = new Person();
// $ideas = new SchoolIdea($person);
// echo $ideas->runIdea('Открытки', 'Slavik');


// use method way



class Logger
{
	/**
	 * @return []
	 */
	public function convertPerson($message, $nameSender)
	{
		return [ $message, $nameSender ];
	}
}

class PersonController
{
	private $logger;

	/**
	 * get dependency 
	 */	
	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;
	}

	/**
	 * used method dependency Logger or running it owner
	 */
	public function createPerson($name, $message)
	{
		return $this->logger->convertPerson('ok. :'.$name,  $message);
	}

}

// $logger = new Logger();

// // create new object
// $person = new PersonController();

// // DI via method
// $person->setLogger($logger);
// $arrbox = $person->createPerson('какое то сообщение', 'мое имя Славик');

// foreach ($arrbox as  $key) {
// 	echo $key;
// }
