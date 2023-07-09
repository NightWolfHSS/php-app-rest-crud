<?php 

//  Трейты позволяют повторно использовать код
//  можно использовать несколько трейтов одновременно
trait Loggable
{
	public function log($message)
	{
		echo "Log: " . $message . "\n";
	}
}

class User
{
	use Loggable;

	public function register()
	{
		$this->log("Пользователь зарегестрирован");
	}

}

class Xshort 
{
	use Loggable;

	public function justMessage()
	{
		$this->log("это сообщение о регистрации - чего либо...");
	}
}

$person = new User;
echo $person->register();

echo "<Br>";
$storm = new Xshort;
echo $storm->justMessage();