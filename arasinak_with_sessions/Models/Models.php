<?php
class Model{
	private $conn;

	public function getConn(){
		return $this->conn;
	}

	public function insertData(
		$studentNumber,
		$fullname,
		$year,
		$faculty
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
				$stmt = $this->conn->prepare("INSERT INTO students (studentNumber,fullname, year, faculty)
				 VALUES (?, ?, ?, ?)");
				$stmt->bind_param("ssds", $stdnum, $fname, $yr, $fct);

				// set parameters and execute
				$stdnum = $studentNumber;
				$fname = $fullname;
				$yr = $year;
				$fct = $faculty;

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

				if ($stmt -> prepare("SELECT * FROM `students`")) {
					  // Execute query
					  $stmt -> execute();

					  // Bind result variables
					  $stmt -> bind_result($id, $studentNumber, $fullname, $year, $faculty);

						$users = array();
					  // Fetch value
						while ($stmt->fetch()) {
							$users[] = new Student(
								$id,
		            $studentNumber,
		            $fullname,
		            $year,
		            $faculty);
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

		if ($stmt -> prepare("DELETE FROM students WHERE students.id = ?")) {

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

	public function getUserByPassWord($userpass){
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

			if ($stmt -> prepare("SELECT * FROM `users` WHERE `password` = ?")) {
				$stmt->bind_param('s', $userpass);

				// Execute query
				$stmt -> execute();

				// Bind result variables
				$stmt -> bind_result($id, $username, $email, $password, $role,);

				$stmt->fetch();

				$user = new User($id, $username, $email, $password, $role,);

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

	public function getStudById($userID){
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

			if ($stmt -> prepare("SELECT * FROM `students` WHERE `id` = ?")) {
				$stmt->bind_param('d', $userID);

				// Execute query
				$stmt -> execute();

				// Bind result variables
				$stmt -> bind_result($id, $studentNumber, $fullName, $year, $faculty,);

				$stmt->fetch();

				$student = new Student($id, $studentNumber, $fullName, $year, $faculty,);

				// Close statement
				$stmt -> close();
				$this->conn->close();

				return $student;
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
									`students`
								SET
									`studentNumber` = ?,
									`fullname` = ?,
									`year` = ?,
									`faculty` = ?

								WHERE `students`.`id` = ?;")) {

					$id = $updateUser->getStudId();
					$studnum = $updateUser->getStudNum();
					$fullname = $updateUser->getFullName();
					$year = $updateUser->getYear();
					$faculty = $updateUser->getFaculty();



				$stmt->bind_param('ssssd',
										$studnum,
										$fullname,
										$year,
										$faculty,
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
