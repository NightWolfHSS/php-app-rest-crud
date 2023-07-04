<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax - Async-server run HTTP</title>
	<script>

		function sendData() {
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "http://php-app-rest-crud/tasks/proccessData.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			xhr.onreadystatechange = function()
			{
				if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
					var responce = xhr.responseText;
					document.getElementById("result").innerHTML = responce;
				}
			}

			var name = document.getElementById("name").value;
			var age  = document.getElementById("age").value;
			var data = "name=" + encodeURIComponent(name) + "&age=" + encodeURIComponent(age);
			//  пропустил знак = и все в одном месте выведится а в другом нет

			xhr.send(data);
		} 

	</script>
</head>
<body>
	<h1>ajax xhr exampel</h1>
	<form>
		<label for="name">Name:</label>
		<input type="text" id="name" requried>
		<br>
		<label for="age">age:</label>
		<input type="text" id="age" required>
		<br>
		<button type="button" onclick="sendData()">ssend</button>
	</form>


<div id="result"></div>

</body>
</html>