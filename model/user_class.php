<?php
  /**
   *
   */
  class User{

    public $email;
    public $senha;
    public function __construct(){
      require_once('model/db_class.php');
        $conexao_db = new Mysql_db();
        $conexao_db->conectar();
    }

    public function login(){
      $conexao = mysqli_connect("localhost", "root", "bcd127");
      $sql = "select * from tbl_users where
      email = '".$this->email."' and
      senha = '".$this->senha."'";
      echo($sql);
      $select = mysqli_query($conexao, $sql);
      if(mysqli_num_rows($select)>0){
        //return true;
        echo("oooi");
      }else {
        //return false;
      }
    }
  }
 ?>
