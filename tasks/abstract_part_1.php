<?php 
/*abstruct part 1 - interface and abstract*/

// echo "<h3>без интерфэйса</h3>";
// class DatabaseLogger
// {
// 	public function execute($message)
// 	{
// 		return $message . get_class($this);
// 	}
// }

// class FileLogger
// {
// 	public function execute($message)
// 	{
// 		return $message . get_class($this);
// 	}
// }


// run methods


// class UserController
// {
// 	protected $logger;

// 	public function __construct(DatabaseLogger $logger)
// 	{
// 		$this->logger = $logger;
// 	}
	
// 	public function show()
// 	{
// 		return $this->logger->execute(" hello ");
// 	}

// }

// $app = new UserController(new DatabaseLogger());
// echo $app->show();

// c интерфэйсом 
 
// interface Logger 
// {
// 	public function test($alert);
// }

// class Main implements Logger
// {
// 	protected $show;

// 	public function __construct($show)
// 	{
// 		echo $this->test($show);
// 	}

// 	public function test($alert)
// 	{
// 		return $this->alert = $alert;
// 	}
// }

// $app = new Main('another message');


interface Logger
{
	public function execute($logger);
}

class Database implements Logger
{
	public function execute($logger)
	{
		return $logger . " " . get_class($this);
	}
}

class FileLogg implements Logger
{
	public function execute($message)
	{
		return $message . " " . get_class($this);
	}
}

class UserController 
{
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show($message)
	{
		echo $this->logger->execute($message);
	}
}

// теперь не надо постоянно прописывать в конструкторе обьекты - за это отвечает автоматизм в конструкторе у нас интерфэйс через него работают другие классы которые созданы в конструкторе
// $app = new UserController(new Database);
// $app->show('сообщение которое ты мечтал получить из базы данных');

// echo "<br>";

// $app = new UserController(new FileLogg);
// $app->show('new data');


// абстрактный метод должен быть реализован
abstract class Fx
{
	public function idea()
	{
		return 'idea';
	}

	public abstract function noice();
}

class Main extends Fx 
{
	public function noice()
	{
		echo "just a noice";
	}

	public function show()
	{
		echo $this->idea();
	}
}

// $app = new Main();
// $app->noice();
// $app->show();