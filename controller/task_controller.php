<?php
  /**
   *
   */
  class ControllerTasks{
    public function listarTasks(){
      require_once('model/task_class.php');
      $task_controller = new Task();
      return $task_controller->listarTasks();
    }

    public function visualizar(){
      require_once('model/task_class.php');
      $task_controller = new Task();
      $task_controller->codigo=$_GET['cod'];
      $task_controller->visualizarTask();
      return $task_controller;
    }

    public function inserir(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require_once('model/arq_class.php');
        $task_controller = new Task();
        $task_controller->nome=$_POST['txt_nome'];
        $task_controller->descricao=$_POST['txt_desc'];

        //TRANSFERINDO O ARQUIVO E PEGANDO SEU CAMINHO
        $arquivo = new Arquivo();
        $arquivo->getUrl($_FILES['file']);
        $task_controller->anexo=$arquivo->url;
        if($task_controller->inserir()){
          header('location: system.php');
        }else {
          header('location: system.php?erro=insert');
        }
    }
  }

  public function editar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      require_once('model/arq_class.php');
      $task_controller = new Task();
      $task_controller->codigo=$_GET['cod'];
      $task_controller->nome=$_POST['txt_nome'];
      $task_controller->descricao=$_POST['txt_desc'];
      //VERIFICANDO SE FOI INSERIDO ALGM ARQUIVO
      if(isset($_FILES['file'])){
        //TRANSFERINDO O ARQUIVO E PEGANDO SEU CAMINHO
        $arquivo = new Arquivo();
        $arquivo->getUrl($_FILES['file']);
        $task_controller->anexo=$arquivo->url;
      }else {
        $task_controller->anexo=null;
      }
      if($task_controller->editar()){
        header('location: system.php');
      }else {
        header('location: system.php?erro=edit');
      }
    }
  }

  public function deletar(){
    $task_controller = new Task();
    $task_controller->codigo=$_GET['cod'];
    if($task_controller->deletar()){
      header('location: system.php');
    }else{
      header('location: system.php?erro=delete');
    }
  }

}
 ?>
