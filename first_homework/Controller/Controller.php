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
        case 'contact':
          $view->contact();
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
