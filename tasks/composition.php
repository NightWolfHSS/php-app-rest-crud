<?php 
echo "композиция";


/*

Композиция - это принцип объектно-ориентированного программирования, который позволяет создавать более сложные объекты, комбинируя или составляя из более простых объектов. При композиции один объект содержит ссылку на другой объект в качестве своего члена или компонента, что позволяет создавать более гибкие и масштабируемые структуры.

В отличие от наследования, где один класс наследует свойства и методы другого класса, композиция позволяет объектам взаимодействовать друг с другом, используя агрегацию или ассоциацию. В результате, объекты могут делегировать выполнение определенных операций своим компонентам.

*/


class Engine
{
	public function start()
	{
		echo "Engine started<br>";
	}
}

class Car
{
	private $engine;

	public function __construct()
	{
		$this->engine = new Engine();
	}

	public function startEngine()
	{
		$this->engine->start();
	}
}


echo "<br>";
$car = new Car();
$car->startEngine();


/*0-1293-93-912-3912-93-0192391-293-01293-1293-091-2093-0192-30-123*/

class Book 
{
	private $title; 
	private $author;

	public function __construct($title, $author)
	{
		$this->title = $title;
		$this->author = $author;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getAuthor()
	{
		return $this->author;
	}
}

class Library
{
	private $books;

	public function __construct()
	{
		$this->books = [];
	}

	public function addBook(Book $book)
	{
		$this->books[] = $book;
	}

	public function getAllBooks()
	{
		return $this->books;
	}

}

/*create obj*/
$book1 = new Book("Knight hollow", "Rob, zik");
$book2 = new Book("Island treasure", "Mack Sourl");

/*create obj lib*/
$lib = new Library();

/*add book in libs */
$lib->addBook($book1);
$lib->addBook($book2);

/*get all books in libs*/
$allBooks = $lib->getAllBooks();

/*each all books information*/
foreach ($allBooks as $book) {
	echo "Title: ". $book->getTitle();
	echo "Author: ". $book->getAuthor() . "<br>";
}