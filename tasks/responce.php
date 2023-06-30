<?php 
// echo "<h1>Responce</h1>";

/*
header("HTTP/1.1 200 OK");
header("Content-Type: text/plain");*/
/*
$responce = "hello world";
header("Content-Length: " . strlen($responce));*/

/*echo $responce; show responce - tiket network */

/*function testRunFunc()
{
	echo "just test work it";
}*/
/*0101010101000101001010010100101010110010101010010100101010001010101*/

/* send json responce and show it to devtools*/
/*header("Content-Type: application/json");
$responces = array(
	"message" => " message send ! success" ,
	"status"  => 200
);
*/
/*echo json_encode($responce); you can show result in devtools network*/
/*echo json_encode($responces);*/


/*example 2 - send html page*/
function eventHandlerHttp()
{
	header("Content-Type: text/html");
	$x_res = "
	<!DOCTYPE html>
	<html>
	<head>
		<title>super a website technology</title>
	</head>
	<body>
		<h1>php very cool language</h1>
	</body>
	</html>";

	/*show to result devtools*/
	echo $x_res;
}


/*перенаправление на другую страницу*/
function redirectToPage()
{
	header("Location: http://php-app-rest-crud/tasks/test.php");
	exit();
}

/*установка кеширования страницы*/
function addNewCachePage()
{
	echo "work it";
	header("Cache-Controll: max-age=3600");
}


/*кастомные заголовки*/
function customHeadlerHttp()
{
	header("HTTP/1.1 404 Not Found");
	header("X-MyHeader: page 404 not found - company 0000");
	echo "page not found 404";
}


/*установить статус код таким образом*/
function setCodeHttpResponce()
{
	http_response_code(200);
	/*set heandler*/
	header("Content-Type: text/plain");
	/*show*/
	echo "work it success";
}
