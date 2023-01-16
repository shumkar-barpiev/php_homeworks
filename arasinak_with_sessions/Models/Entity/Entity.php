<?php
	class User{
		private $id;
		private $userName;
		private $email;
		private $password;
		private $role;

		public function __construct($id, $userName, $email, $password, $role){
			if($id) $this->id = $id;
			$this->userName = $userName;
			$this->email = $email;
			$this->password = $password;
			$this->role = $role;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}

		public function getuserName(){
			return $this->userName;
		}
		public function setuserName($userName){
			$this->userName = $userName;
		}

		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}

		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}

		public function getRole(){
				return $this->role;
		}
		public function setRole($role){
				$this->role = $role;
		}
	}




	class Student{
		private $id;
		private $studentNumber;
		private $fullName;
		private $year;
		private $faculty;


		public function __construct($id, $studentNumber ,$fullName, $year, $faculty){
			if($id) $this->id = $id;
			$this->studentNumber = $studentNumber;
			$this->fullName = $fullName;
			$this->year = $year;
			$this->faculty = $faculty;
		}

		public function getStudId(){
			return $this->id;
		}
		public function setStudId($id){
			$this->id = $id;
		}

		public function getStudNum(){
			return $this->studentNumber;
		}
		public function setStudNum($studentNumber){
			$this->studentNumber = $studentNumber;
		}

		public function getFullName(){
			return $this->fullName;
		}
		public function setFullName($fullName){
			$this->fullName = $fullName;
		}

		public function getYear(){
			return $this->year;
		}
		public function setYear($year){
			$this->year = $year;
		}

		public function getFaculty(){
				return $this->faculty;
		}
		public function setFaculty($faculty){
				$this->faculty = $faculty;
		}
	}
?>
