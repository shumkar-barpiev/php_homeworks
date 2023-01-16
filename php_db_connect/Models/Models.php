<?php
class Model{
	private $conn;

	public function getConn(){
		return $this->conn;
	}

	public function connectDB(){
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
			  return "Connection failed";
			}
			$this->conn->close();
			return "Connected succesfully!!!";
	}

/*	public function createTable(){
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
			  return "Connection failed";
			}

			// sql to create table
			$sql = "CREATE TABLE Users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			fullname VARCHAR(100) NOT NULL,
			gender VARCHAR(100) NOT NULL,
			softwareEngineer VARCHAR(100) NOT NULL,
			jobTitle VARCHAR(100) NOT NULL,
			technologies VARCHAR(1000) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL,
			phonenumber VARCHAR(50) NOT NULL,
			address VARCHAR(100) NOT NULL,
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			)";

			if ($this->conn->query($sql) === TRUE) {
				$this->conn->close();
			  return "Table Users created successfully";
			} else {
				$this->conn->close();
			  return "Error creating table: " . $this->conn->error;
			}
	}*/


	public function insertData(
		$fullname,
		$gender,
		$softwareEngineer,
		$jobTitle,
		$technologies,
		$email,
		$password,
		$phonenumber,
		$address
	){
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
			  return "Connection failed";
			}

				// prepare and bind
				$stmt = $this->conn->prepare("INSERT INTO Users (fullname, gender,softwareEngineer, jobTitle, technologies, email, password, phonenumber, address)
				 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt->bind_param("sssssssss", $fname, $gnr, $softEn, $jobT, $tech, $eml, $passw, $phnNum, $addr);

				// set parameters and execute
				$fname = $fullname;
				$gnr = $gender;
				$softEn = $softwareEngineer;
				$jobT = $jobTitle;
				$tech = $technologies;
				$eml = $email;
				$passw = $password;
				$phnNum = $phonenumber;
				$addr = $address;
				$stmt->execute();

				$stmt->close();
		$this->conn->close();
	}


	public function getAllusers(){
			$conf = new Config();

			$this->conn = new mysqli(
					$conf->getHost(),
					$conf->getUserName(),
					$conf->getUserPass(),
					$conf->getDBName()
				);
				// Check connection
				if ($this->conn->connect_error) {
					$this->conn->close();
				  return "Connection failed";
				}

				$stmt = $this->conn -> stmt_init();

				if ($stmt -> prepare("SELECT * FROM `users`")) {
					  // Execute query
					  $stmt -> execute();

					  // Bind result variables
					  $stmt -> bind_result($id, $fullname, $gender, $softwareEngineer, $jobTitle, $technologies, $email, $password, $phonenumber, $address, $reg_date);

						$users = array();
					  // Fetch value
						while ($stmt->fetch()) {
							$users[] = new User(
								$id,
		            $fullname,
		            $gender,
		            $softwareEngineer,
		            $jobTitle,
		            $technologies,
		            $email,
		            $password,
		            $phonenumber,
		            $address);
						}

					  // Close statement
					  $stmt -> close();
						$this->conn->close();

					  return $users;
		}
	}

	public function deleteUser($userId){
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
				return "Connection failed";
			}

		$stmt = $this->conn -> stmt_init();

		if ($stmt -> prepare("DELETE FROM users WHERE users.id = ?")) {

			$stmt->bind_param('d', $userId);

			// Execute query
			$stmt -> execute();

			if($stmt->error){
				$message = "Ooopps! Something gone wrong!";
			}
			else{
				$message = $stmt->affected_rows;
			}
			// Close statement
			$stmt -> close();
			$this->conn->close();

			return $message;
		}
		else{
			$message = "Ooopps! Something gone wrong!";
			return $message;
		}
	}

	public function getUserById($userId){
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
				return "Connection failed";
			}

			$stmt = $this->conn -> stmt_init();

			if ($stmt -> prepare("SELECT * FROM `users` WHERE `id` = ?")) {
				$stmt->bind_param('d', $userId);

				// Execute query
				$stmt -> execute();

				// Bind result variables
				$stmt -> bind_result($id, $fullname, $gender, $softwareEngineer, $jobTitle, $technologies, $email, $password, $phonenumber, $address, $reg_date);

				$stmt->fetch();

				$user = new User($id, $fullname, $gender, $softwareEngineer, $jobTitle, $technologies, $email, $password, $phonenumber, $address);

				// Close statement
				$stmt -> close();
				$this->conn->close();

				return $user;
			}
			else{
				$message = "Ooopps! Something gone wrong!";
				return $message;
		}
	}

	public function updateData($updateUser)
	{
		$conf = new Config();

		$this->conn = new mysqli(
				$conf->getHost(),
				$conf->getUserName(),
				$conf->getUserPass(),
				$conf->getDBName()
			);
			// Check connection
			if ($this->conn->connect_error) {
				$this->conn->close();
				return "Connection failed";
			}

		$stmt = $this->conn -> stmt_init();
//fullname, gender,softwareEngineer, jobTitle, technologies, email, password, phonenumber, address
			if ($stmt -> prepare("UPDATE
									`users`
								SET
									`fullname` = ?,
									`gender` = ?,
									`softwareEngineer` = ?,
									`jobTitle` = ?,
									`technologies` = ?,
									`email` = ?,
									`password` = ?,
									`phonenumber` = ?,
									`address` = ?

								WHERE `users`.`id` = ?;")) {

					$id = $updateUser->getId();
					$fullname = $updateUser->getFullName();
					$gender = $updateUser->getGender();
					$softwareEngineer = $updateUser->getSoftwareEngineer();
					$jobTitle = $updateUser->getJobTitle();
					$technologies =  $updateUser->getTecnologies();
					$email = $updateUser->getEmail();
					$password = $updateUser->getPassword();
					$phonenumber = $updateUser->getPhoneNumber();
					$address = $updateUser->getAddress();

				$stmt->bind_param('sssssssssd',
										$fullname,
										$gender,
										$softwareEngineer,
										$jobTitle,
										$technologies,
										$email,
										$password,
										$phonenumber,
										$address,
										$id
									);

				// Execute query
				$stmt -> execute();

				if($stmt->error){
					$message = "Ooopps! Something gone wrong!";
				}
				else{
					$message = $stmt->affected_rows;
				}
				// Close statement
				$stmt -> close();
				$this->conn->close();

				return $message;
			}
			else{
				$message = "Ooopps! Something gone wrong!";
				return $message;
			}
	}
}
 ?>
