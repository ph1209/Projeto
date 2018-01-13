<?php
  if(isset($_GET['controller'])){
    $controller=$_GET['controller'];
  }
  if(isset($_GET['modo'])){
    $modo=$_GET['modo'];
  }
  switch ($controller) {
    case 'login':
      require_once('model/user_class.php');
      require_once('controller/login_controller.php');
      $controller_login = new ControllerLogin;
      $controller_login->login();
      break;
    default:
      # code...
      break;
  }
 ?>
