<?php
session_start();
/**
 * Controller
 */

class Controller
{
  public function select_page($view)
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
        case 'login':
          $view->login();
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
            $fullname,
            $gender,
            $softwareEngineer,
            $jobTitle,
            $technologies,
            $email,
            $password,
            $phonenumber,
            $address);

          $view->profile($user);
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
