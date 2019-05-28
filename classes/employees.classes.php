<?php
	class employees
	{
		protected $database = null;

		public function __construct($database){
			$this->database = $database;
		}

		public function registerEmployee($user_email, $user_password, $employee_number, $user_forename, $user_surname){

			$encryptedPass = password_hash($user_password, PASSWORD_DEFAULT);
			//Insert database
			$query = "INSERT INTO Users (user_email, user_password, employee_number, user_forename, user_surname) VALUES (:user_email, :user_password, :employee_number, :user_forename, :user_surname )";
			$pdo = $this->database->prepare($query);
			$pdo->bindParam(':user_email', $user_email);
			$pdo->bindParam(':user_password', $encryptedPass);
            $pdo->bindParam(':employee_number', $employee_number);
            $pdo->bindParam(':user_forename', $user_forename);
            $pdo->bindParam(':user_surname', $user_surname);
			$pdo->execute();

			return $this->database->lastInsertId();
		}

		public function checkEmployee($email, $password){
			//lets get user
			$query = "SELECT * FROM users WHERE user_email = :email";
			$pdo = $this->database->prepare($query);
			$pdo->bindParam(':email', $email);
			$pdo->execute();

			$user = $pdo->fetch(PDO::FETCH_ASSOC);

			if(empty($user)){
				return false;
			}else if(password_verify($password, $user['user_password'])){
				return $user;
			}else{
				return false;
			}
		}
} ?>