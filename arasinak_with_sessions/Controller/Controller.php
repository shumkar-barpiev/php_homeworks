<?php
session_start();
/**
 * Controller
 */
class Controller
{
  public function select_page($view, $model)
  {
    if(isset($_GET['page'])){
      switch ($_GET['page']) {
        case 'logout':
          session_unset();
          $view->index();
          break;
        case 'login':
          if ($_POST["password"] && $_POST['username']) {
            $pass = md5($_POST["password"]);
            $getUser = $model->getUserByPassWord($pass);
            if ($getUser->getPassword() == $pass ) {
              $_SESSION["userName"] = $_POST['username'];
              $_SESSION["password"] = $pass;

              if ($getUser->getRole() == "user" ) {
                $view->homeUser();
              }
              elseif ($getUser->getRole() == "admin" ) {
                $view->homeAdmin();
              }
              else {
                $view->showMessage("User id is undefined!");
              }
            }
            elseif($getUser == "Connection failed"){
              $view->showInfomessage("Connection failed");
            }
            elseif($getUser == "Ooopps! Something gone wrong!"){
              $view->showInfomessage("Ooopps! Something gone wrong!");
            }
            else {
              $view->showMessage("User is undefined!");
            }
          }
          else {
            $view->showMessage("User id is undefined!");
          }
          break;
        case 'updateInfo':
          $id = $_POST['id'];
          $studnum = $_POST['studnumber'];
          $fullname = $_POST['fullname'];
          $year = $_POST['year'];
          $faculty = $_POST['faculty'];

            $student = new Student(
              $id,
              $studnum,
              $fullname,
              $year,
              $faculty);


            $updateData = $model->updateData($student);
            $all_Users = $model->getAllusers();
            if ($updateData == "Connection failed" ) {
              $view->showInfomessage($updateData);
            }
            elseif ($updateData == "Ooopps! Something gone wrong!") {
              $view->showInfomessage($updateData);
            }
            else {
              $view->showAllUsersforAdmin($all_Users);
            }
        break;
        case "insertStudent":
          $view->insertStudent();
          break;
        case "insertData":
            $studentNumber = $_POST['studnumber'];
            $fullname = $_POST['fullname'];
            $year = $_POST['year'];
            $faculty = $_POST['faculty'];

            $connectResult = $model->insertData(
          		$studentNumber,
          		$fullname,
          		$year,
          		$faculty
            );

            if($connectResult == "Connection failed"){
              $view->showInfomessage("Connection failed");
            }
            else{
              $view->showInfomessage("New Student Added successfully!!!");
            }
          break;
        case "showallusersA":
          $all_Users = $model->getAllusers();

          if($all_Users == "Connection failed"){
            $view->showInfomessage($connectResult.": ".$model->getConn()->connect_error);
          }
          else{
						$view->showAllUsersforAdmin($all_Users);
          }
          break;

        case "showallusersU":
          $all_Users = $model->getAllusers();

          if($all_Users == "Connection failed"){
                $view->showInfomessage($connectResult.": ".$model->getConn()->connect_error);
          }
          else{
						$view->showAllUsersforUser($all_Users);
          }
          break;
        case "deleteUser":
  						  if(isset($_POST["userId"])){

  								$resultMessage = $model->deleteUser($_POST["userId"]);

  								if($resultMessage == "Ooopps! Something gone wrong!"){
  									$view->showInfomessage($resultMessage);
  								}
  								else{
  									$message = "<h1>User deleted successfully!</h1>
  												<p>".$resultMessage." rows affected</p>";
										$view->showInfomessage($message);  									}
  							}
  							else{
  								$view->showInfomessage("User id is undefined");
  							}
  					break;

        case "searchadmin":
          $view->searchAdmin();
        break;
        case "searchuser":
          $view->searchUser();
        break;
        case "updateUser":
          if ($_POST["userId"]) {
            $getUser = $model->getStudById($_POST["userId"]);

            if($getUser == "Connection failed"){
              $view->showInfomessage($resultMessage);
            }
            if($getUser == "Ooopps! Something gone wrong!"){
              $view->showInfomessage($resultMessage);
            }
            else{
              //echo get_class($getUser)." this is your class";
              $view->updateUser($getUser);
            }
          }
          else {
            $view->showInfomessage("User id is undefined!");
          }
          break;
        default:
            $view->index();
          break;
      }
    }else{
      $view->index();
    }
  }
}


 ?>
