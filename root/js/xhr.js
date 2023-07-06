// тут нет проверки на заполнение - нет валидации
// можно запретить отправлять данные более 3 раз - сохранять данные в сессиях для пользователя что поможет избедать ddos атак или localstorage - хоть их и можно стереть но все же

function turn_server() {

	const xhr = new XMLHttpRequest();

	xhr.open("POST", "http://php-app-rest-crud/data/datas.php", true);
	xhr.onreadystatechange = function() {

		document.querySelector(".tx").classList.remove("text_resp");
		document.querySelector(".resp > div").classList.add("responce");

		if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
			// let responce = xhr.responceText; get method use
			setTimeout(function(){
				responce_status('Отлично! данные отправлены.');
				console.log('%c данные успешно отправлены: status 200/OK.', 'color: green;');
			}, 1200);
		} 
	};

	xhr.onerror = function() {
		responce_status("Ошибка - данные не корректны или неверный путь!")
		console.error('произошла какая то ошибка');
	};

	// send stuff
    let work = document.getElementById("work").value;
	let name = document.getElementById("name").value;
	let cat = document.getElementById("cat").value;
	let dog = document.getElementById("dog").value;
	// send data
	let data = "work=" + encodeURIComponent(work) + "&name=" + encodeURIComponent(name) + 
	"&cat=" + encodeURIComponent(cat) + "&dog=" + encodeURIComponent(dog);
	xhr.send(data);
	// watch tab network->payload - there you can see that we are receiving data

}

// use DRY
function responce_status($message) {
	document.querySelector(".resp > div").classList.remove("responce");
	document.querySelector(".tx").classList.add("text_resp");
	document.querySelector(".tx > p").innerHTML = $message;
}

// push it
document.querySelector('.space-send').onclick = turn_server;