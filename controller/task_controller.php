<?php
  /**
   *
   */
  class ControllerTasks{
    public function inserir(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $task_controller = new Task();
        $task_controller->nome=$_POST['txt_nome'];
        $task_controller->descricao=$_POST['txt_desc'];
        $task_controller->anexo=$_FILE['name']['file'];
    }
  }

 ?>
