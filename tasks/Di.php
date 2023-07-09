<?php 
// Dependency Injection (DI) и Inversion of Control (IoC) - это связанные понятия, но имеют некоторые различия.

// Dependency Injection (DI) - это конкретная техника реализации принципа IoC. Он означает, что объекту внедряются (вставляются) его зависимости извне, вместо того, чтобы объект самостоятельно создавать или получать зависимости. Цель DI - уменьшить связанность между компонентами, улучшить тестируемость и повторное использование кода.

// Пример DI:
class Database {
    // ...
}

class UserService {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    // ...
}

$database = new Database();
$userService = new UserService($database);

// Inversion of Control (IoC) - это более широкий принцип проектирования, который описывает общий подход к управлению зависимостями и контролю над потоком выполнения в приложении. Он заключается в том, что объекты должны полагаться на контейнер или фреймворк для предоставления своих зависимостей и управления жизненным циклом объектов.

// IoC переворачивает контроль над созданием и взаимодействием объектов от объектов самостоятельно к контейнеру или фреймворку. Это позволяет централизованно управлять зависимостями, координировать их создание и жизненный цикл, а также обеспечивать внедрение зависимостей.

// DI является одним из инструментов реализации IoC, но IoC также может включать другие аспекты, такие как управление жизненным циклом объектов, декларативная конфигурация зависимостей, создание и управление компонентами и т. д.

// Итак, DI - это конкретная техника реализации IoC, которая обеспечивает внедрение зависимостей в объекты, в то время как IoC - это широкий принцип, описывающий централизованное управление зависимостями и контролем над потоком выполнения в приложении.