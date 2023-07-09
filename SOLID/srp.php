<?php 

/*Принцип единственной ответственности (SRP) гласит, что каждый класс должен иметь только одну ответственность. Это означает, что класс должен быть ответственен только за один аспект функциональности. Вот пример кода, демонстрирующий принцип SRP:*/


// Пример нарушения принципа SRP

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

    public function save() {
        // Логика сохранения пользователя в базе данных
        // ...
    }

    public function sendEmail($message) {
        // Логика отправки электронной почты пользователю
        // ...
    }
}

/*В этом примере класс User нарушает принцип SRP, потому что он имеет две ответственности: сохранение пользователя в базе данных и отправку электронной почты пользователю. Как результат, класс становится слишком сложным, трудно поддерживаемым и менее гибким.*/

class User
{
	private $name;
	private $email;

	public function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

}

/*=============================================================================*/



class EmailSender
{
	public function sendEmail($user, $message)
	{
		/*logic here*/
	}
}

/* еще прмеры */

/*текущий класс отвечает за управление пользователем - только для пользователей - это единая ответственность*/
class UserManager
{
	public function createUser($userData)
	{
		/*logit crate new user*/
	}

	public function updateUser($userId, $usedData)
	{
		/* information about user in database*/
	}

	public function deleteUser($userId)
	{
		/*logic deleting user*/
	}
}

/*класс отвечает за отправку писем*/
class UserEmailSender
{
	public function sendWelcomeEmail($userEmail)
	{	
		/*loginc send message user*/
	}

	public function sendPasswordResetEmail($userEmail)
	{
		/*login send message reser message to pass*/
	}
}