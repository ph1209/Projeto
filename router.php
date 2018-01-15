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
    case 'task':
      require_once('model/task_class.php');
      require_once('controller/task_controller.php');
      $controller_task = new ControllerTasks;
      switch ($modo) {
        case 'inserir':
          $controller_task->inserir();
          break;
        case 'visualizar':
          $controller_task->visualizar();
          break;
        case 'editar':
          $controller_task->editar();
          break;
        case 'deletar':
          $controller_task->deletar();
          break;
        default:
          # code...
          break;
      }
      break;
    default:
      # code...
      break;
  }
 ?>
