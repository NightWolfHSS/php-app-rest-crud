<?php 

/*

Ассоциация - это связь между двумя или более объектами в объектно-ориентированном программировании. Она показывает, что объекты имеют некоторую взаимосвязь или взаимодействуют друг с другом в определенном контексте.

Ассоциация может быть однонаправленной или двунаправленной, и она может иметь мультипликацию, что означает, что один объект может быть связан с несколькими объектами того же типа. Ассоциации могут быть сильными (тесными) или слабыми (более свободными), в зависимости от силы связи между объектами.

*/

class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Order {
    private $orderNumber;
    private $user;

    public function __construct($orderNumber, User $user) {
        $this->orderNumber = $orderNumber;
        $this->user = $user;
    }

    public function getOrderNumber() {
        return $this->orderNumber;
    }

    public function getUser() {
        return $this->user;
    }
}

/*


В этом примере у нас есть класс User, представляющий пользователя с именем и адресом электронной почты. Затем у нас есть класс Order, представляющий заказ с номером и связанным с ним пользователем.

Класс Order ассоциируется с классом User, поскольку каждый заказ имеет связанного пользователя. Объект Order содержит ссылку на объект User.

*/


// Создаем объект пользователя
$user = new User("John Doe", "johndoe@example.com");

// Создаем объект заказа
$order = new Order(1, $user);

// Получаем информацию о заказе и связанном пользователе
$orderNumber = $order->getOrderNumber();
$userName = $order->getUser()->getName();
$userEmail = $order->getUser()->getEmail();

echo "Order number: " . $orderNumber . PHP_EOL;
echo "User name: " . $userName . PHP_EOL;
echo "User email: " . $userEmail . PHP_EOL;


/*

В этом примере мы создаем объект User (пользователь) и объект Order (заказ) с ссылкой на пользователя. Мы можем получить информацию о заказе и связанном пользователе, используя методы getOrderNumber(), getName() и getEmail().

Ассоциации помогают моделировать взаимодействия и зависимости между объектами в программе. Они позволяют объектам обмениваться информацией, вызывать методы других объектов и участвовать в различных взаимодействиях.


*/