<?php
  if(isset($_GET['controller'])){
    $controller=$_GET['controller'];
  }
  switch ($controller) {
    case 'login':
      require_once('controller/login_controller.php');
      $controller_login = new ControllerLogin;
      $controller_login->login();
      break;

    default:
      # code...
      break;
  }
 ?>
