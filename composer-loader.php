<?php 
// как же работаю авто загрузчики spl функции custom autoloader и composer
 
// без автозагрузчика придется использовать require / include
// include продолжит выполнение файла но с ошибкой если его не будет найдено
// require приостановить выполнение если не будет найден файл
// include 'php_classes/Animal.php'; old way


// use custom autoloader
// мы использовали анонимную фукцию авто загрузки 
// вариаций кастомной загрузки несколько

// spl_autoload_register(function ($class){
// 	$result = include __DIR__.'/php_classes/'.$class.'.php';
// 	if ($result === false) {
// 		header('Location: /404.php');
// 	}
// });

// $app = new Animal();

// use composer autoloader 
require 'vendor/autoload.php';

// $app = new Animal(); загрузил просто как файл 
// настройка комозера  - files:["php_classes/file_name.php"]
// psr-0
//  use psr 0 class autoloader - настройка в композере
// "psr-0": {
//     "xhhs\\php-app-rest-crud": "php_classes"
// }

// теперь мы можем подключать любой класс в стандарте psr-0 composer
// $testLoader = new Practic\Library\Practice(); работает