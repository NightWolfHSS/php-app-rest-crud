<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    
    // Обработка данных и формирование ответа
    $response = "Привет, " . $name . "! Ваш возраст: " . $age;

    // Отправка ответа обратно клиенту
    echo $response;
}
?>
