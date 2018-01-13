<?php
  /**
   *
   */
  require_once('model/db_class.php');
  class Task{
    public $codigo;
    public $nome;
    public $descricao
    public $anexo;

    public function __construct(){
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();
    }

    public function listarTasks(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;

      $sql = "SELECT * FROM tbl_tasks"
      $select = mysqli_query($con, $sql);
      if(mysqli_num_rows($select)>0){ //VERIFICA SE HÁ ALGO NA TABELA DE TASKS
        $lst_tasks; //CRIA UMA LISTA DE TASKS
        $contador = 0;
        while (mysqli_fetch_array($select)) {
          $task = new Task(); //CRIA UM NOVO OBJETO TASK
          $task->codigo = $rs['codigo'];
          $task->nome = $rs['nome'];
          $task->descricao = $rs['descricao'];
          $task->anexo = $rs['arquivo_anexo'];
          $lst_tasks[$contador]=$task; //INSERE O OBJETO TASK NA LISTA
          $contador ++;
        }
        return $lst_tasks;//RETORNA A LISTA DE TASKS
      }else{
        return false;
      }
    }

    public function visualizarTask(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;

      $sql = "SELECT * FROM tbl_tasks WHERE codigo=".$this->codigo;
      if($select = mysqli_query($con, $sql)){
        $rs = mysqli_fetch_array($select);
        $this->nome = $rs['nome'];
        $this->descricao = $rs['descricao'];
        $this->anexo = $rs['arquivo_anexo'];
      }else {
        return false;
      }
    }

    public function inserir(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;

      $sql = "INSERT INTO tbl_tasks(nome, descricao, arquivo_anexo)
      VALUES('".$this->nome."', '".$this->descricao."', '".$this->anexo."')";
      if(mysqli_query($con, $sql)){
        return true;
      }else {
        return false;
      }
    }

    public function editar(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;

      $sql = "UPDATE tbl_tasks
      SET nome='".$this->nome"',
      descricao='".$this->descricao"',
      arquivo_anexo='".$this->anexo."'
      WHERE codigo=".$this->codigo;
      if(mysqli_query($con, $sql)){
        return true;
      }else {
        return false;
      }
    }

    public function excluir(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;

      $sql = "DELETE FROM tbl_tasks WHERE codigo=".$this->codigo;
      if(mysqli_query($con, $sql)){
        return true;
      }else {
        return false;
      }
    }
  }
 ?>
