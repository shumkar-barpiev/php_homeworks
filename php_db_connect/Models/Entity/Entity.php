<?php
	class User{
		private $id;
		private $fullName;
		private $gender;
		private $softwareEngineer;
		private $jobTitle;
		private $technologies;
		private $email;
		private $password;
		private $phoneNumber;
		private $address;



		public function __construct($id, $fullName, $gender, $softwareEngineer, $jobTitle, $technologies, $email, $password,$phoneNumber, $address){
			if($id) $this->id = $id;
			$this->fullName = $fullName;
			$this->gender = $gender;
			$this->softwareEngineer = $softwareEngineer;
			$this->jobTitle = $jobTitle;
			$this->technologies = $technologies;
			$this->email = $email;
			$this->password = $password;
			$this->phoneNumber = $phoneNumber;
			$this->address = $address;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}

		public function getFullName(){
			return $this->fullName;
		}
		public function setFullName($fullName){
			$this->fullName = $fullName;
		}


		public function getGender(){
			return $this->gender;
		}
		public function setGender($gender){
			$this->gender = $gender;
		}


		public function getSoftwareEngineer(){
			return $this->softwareEngineer;
		}
		public function setSoftwareEngineer($softwareEngineer){
			$this->softwareEngineer = $softwareEngineer;
		}


		public function getJobTitle(){
			return $this->jobTitle;
		}
		public function setJobTitle($jobTitle){
			$this->jobTitle = $jobTitle;
		}


		public function getTecnologies(){
			return $this->technologies;
		}
		public function setTecnologies($technologies){
			$this->technologies = $technologies;
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

		public function getPhoneNumber(){
				return $this->phoneNumber;
		}
		public function setPhoneNumber($phoneNumber){
				$this->phoneNumber = $phoneNumber;
		}


		public function getAddress(){
			return $this->address;
		}
		public function setAddress($address){
			$this->address = $address;
		}
	}
?>
