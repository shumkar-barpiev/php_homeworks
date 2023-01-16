<?php
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
        case 'showcookies':
          $view->showcookies();
          break;
        case 'unsetcookies':
          setcookie("fullname", '', time()- 3600, "/");
          setcookie("gender", '', time()- 3600, "/");
          setcookie("softwareEngineer", '', time()- 3600, "/");
          setcookie("jobTitle", '', time()- 3600, "/");
          setcookie("skills", '', time()- 3600, "/");
          setcookie("email", '', time()- 3600, "/");
          setcookie("phonenumber", '', time()- 3600, "/");
          setcookie("address", '', time()- 3600, "/");
          $view->index();
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

          $tech = "";

          foreach ($technologies as $value) {
            $tech.= $value.", ";
          }


          setcookie("fullname", $_POST['fullname'], time() + 3600, "/");
          setcookie("gender", $_POST['gender'], time() + 3600, "/");
          setcookie("softwareEngineer", $_POST['softwareEngineer'], time() + 3600, "/");
          setcookie("jobTitle", $_POST['jobTitle'], time() + 3600, "/");
          setcookie("skills", $tech, time() + 3600, "/");
          setcookie("email", $_POST['email'], time() + 3600, "/");
          setcookie("phonenumber", $_POST['phonenumber'], time() + 3600, "/");
          setcookie("address", $_POST['address'], time() + 3600, "/");


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
