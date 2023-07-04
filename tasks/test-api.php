<?php 
//  api
// тут не работает так как есть composer autoload !
// ======================
// =====================================
// -----===============================------------


$method = $_SERVER['REQUEST_METHOD'];
$path   = $_SERVER['PATH_INFO'] ?? '/';
$params = $_GET;

// define routes 
$routes = [
	'/' => 'home',
	'/users' => 'getUsers',
	'/products' => 'getProducts',
	'/contacts' => 'contactForm',
];

// handling request

if (isset($routes[$path])) {
	$handler = $routes[$path];

	if (function_exists($handler)) {
		$response = $handler($method, $params);
		echo json_encode($response);
	} else {
		echo json_encode(['error' => 'handler not fount']);
	}

} else {
	echo json_encode(['error' => 'Route not found']);
}

// handler routes
function home($method, $params)
{
	return ['message' => 'welcome to the API'];
}

function getUsers($method, $params)
{
	$users = [
		['id' => 1, 'name' => 'Slavk Powers'],
		['id' => 2, 'name' => 'Cort Malrshmellow'],
	];

	return $users;
}

function getProducts($method, $params)
{
	$products = [
		['id' => 1, 'name' => 'milkl', 'price' => 1200],
		['id' => 2, 'name' => 'apple', 'price' => 34.12],
	];

	return $products; 

}


function contactForm($method, $params)
{
	if ($method === 'POST') {
		// form logic  handling...
		return ['message' => 'Contact form Submitted'];
	}

	return ['message' => 'contact form'];
}
