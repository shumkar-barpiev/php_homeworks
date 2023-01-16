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
        case 'about':
          $view->about();
          break;
        case 'services':
          $view->services();
          break;
        case 'portfolio':
          $view->portfolio();
          break;
        case 'registration':
          $view->register();
          break;
        case 'showsessions':
          $view->showsessions();
          break;
        case 'unsetsessions':
          session_unset();
          $view->showsessions();
          break;
        case 'profile':
          $fullname = $_POST['fullname'];
          $gender = $_POST['gender'];
          $softwareEngineer = $_POST['softwareEngineer'];
          $jobTitle = $_POST['jobTitle'];
          $technologies = $_POST['skills'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $phonenumber = $_POST['phonenumber'];
          $address = $_POST['address'];


          $_SESSION["fullname"] = $_POST['fullname'];
          $_SESSION["gender"] = $_POST['gender'];
          $_SESSION["softwareEngineer"] = $_POST['softwareEngineer'];
          $_SESSION["jobTitle"] = $_POST['jobTitle'];
          $_SESSION["skills"] = $_POST['skills'];
          $_SESSION["email"] = $_POST['email'];
          $_SESSION["password"] = $_POST['password'];
          $_SESSION["phonenumber"] = $_POST['phonenumber'];
          $_SESSION["address"] = $_POST['address'];

          $user = new User(
            null,
            $fullname,
            $gender,
            $softwareEngineer,
            $jobTitle,
            $technologies,
            $email,
            $password,
            $phonenumber,
            $address);

            $tech = "";
          foreach ($user->getTecnologies() as $skill) {
              $tech .= $skill.", ";
          }


          $insertData = $model->insertData(
            $fullname,
            $gender,
            $softwareEngineer,
            $jobTitle,
            $tech,
            $email,
            $password,
            $phonenumber,
            $address
          );

          $view->profile($user);
          break;
        case 'updateInfo':
          $id = $_POST['id'];
          $fullname = $_POST['fullname'];
          $gender = $_POST['gender'];
          $softwareEngineer = $_POST['softwareEngineer'];
          $jobTitle = $_POST['jobTitle'];
          $technologies =  "";
          foreach ($_POST['skills'] as $skill) {
              $technologies .= $skill.", ";
          }
          $email = $_POST['email'];
          $password = $_POST['password'];
          $phonenumber = $_POST['phonenumber'];
          $address = $_POST['address'];




            $user = new User(
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




            $updateData = $model->updateData($user);
            $all_Users = $model->getAllusers();
            if ($updateData == "Connection failed" ) {
              $view->showMessage($updateData);
            }
            elseif ($updateData == "Ooopps! Something gone wrong!") {
              $view->showMessage($updateData);
            }
            else {
              $view->showAllUsers($all_Users);
            }
        break;
        case "connect":
            $connectResult = $model->connectDB();

            if($connectResult == "Connection failed"){
              $view->connectDB($connectResult.": ".$model->getConn()->connect_error);
            }
            else{
              $view->connectDB($connectResult);
            }
          break;
        case "showallusers":
          $all_Users = $model->getAllusers();

          if($all_Users == "Connection failed"){
                $view->connectDB($connectResult.": ".$model->getConn()->connect_error);
          }
          else{
						$view->showAllUsers($all_Users);
          }
          break;
        case "deleteUser":
  						  if(isset($_POST["userId"])){
  								$resultMessage = $model->deleteUser($_POST["userId"]);

  								if($resultMessage == "Ooopps! Something gone wrong!"){
  									$view->showMessage($resultMessage);
  								}
  								else{
  									$message = "<h1>User deleted successfully!</h1>
  												<p>".$resultMessage." rows affected</p>";
										$view->showMessage($message);  									}
  							}
  							else{
  								$view->showMessage("User id is undefined");
  							}
  					break;
        case "updateUser":
          if ($_POST["userId"]) {
            $getUser = $model->getUserById($_POST["userId"]);

            if($getUser == "Connection failed"){
              $view->showMessage($resultMessage);
            }
            if($getUser == "Ooopps! Something gone wrong!"){
              $view->showMessage($resultMessage);
            }
            else{
              //echo get_class($getUser)." this is your class";
              $view->updateUser($getUser);
            }
          }
          else {
            $view->showMessage("User id is undefined!");
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
